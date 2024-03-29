@echo off

REM Include variables from separate file
call src\variables.bat

REM Start Kuwa workers

REM Redis Server

pushd packages\%redis_folder%
start /b "" "redis-server.exe" redis.conf
popd

REM Define number of workers
set numWorkers=10

REM Redis workers
for /l %%i in (1,1,%numWorkers%) do (
	echo Started a model worker
    start /b packages\%php_folder%\php.exe ..\src\multi-chat\artisan queue:work --verbose --timeout=6000
)

REM Agent
pushd "..\src\kernel"
del records.pickle
set PYTHONPATH=%PYTHONPATH%;%~dp0..\src\kernel\src
start /b "" "%~dp0packages\%python_folder%\python.exe" "%~dp0..\src\kernel\main.py"
popd

REM Wait for Agent online
:CHECK_URL
timeout /t 1 >nul
curl -s -o nul http://127.0.0.1:9000
if %errorlevel% neq 0 (
    goto :CHECK_URL
)
REM Load Model settings
call env.bat
set PYTHONPATH=%PYTHONPATH%;%~dp0..\src\executor
IF EXIST env.bat (
	REM Start models
	pushd "..\src\multi-chat"
	call ..\..\windows\packages\%php_folder%\php.exe artisan model:prune --force
	popd
	pushd ..\src\executor
	if defined gemini_key (
		start /b "" "%~dp0packages\%python_folder%\python.exe" geminipro.py --api_key %gemini_key%
		pushd "..\multi-chat"
		call ..\..\windows\packages\%php_folder%\php.exe artisan model:config "gemini-pro" "Gemini Pro"
		popd
	) else (
		echo gemini_key is not set. Skipping geminipro.py execution.
	)
	if defined gguf_path (
		start /b "" "%~dp0packages\%python_folder%\python.exe" llamacpp.py --model_path %gguf_path%
		pushd "..\multi-chat"
		call ..\..\windows\packages\%php_folder%\php.exe artisan model:config "gguf" "LLaMA.cpp Model"
		popd
	) else (
		echo gguf_path is not set. Skipping llamacpp.py execution.
	)
	popd
) ELSE (
    echo env.bat doesn't exist, skipped.
)
pushd ..\src\executor
if defined chatgpt_key (
	start /b "" "%~dp0packages\%python_folder%\python.exe" chatgpt.py --api_key %chatgpt_key%
) else (
	start /b "" "%~dp0packages\%python_folder%\python.exe" chatgpt.py
)
pushd "..\multi-chat"
call ..\..\windows\packages\%php_folder%\php.exe artisan model:config "chatgpt" "ChatGPT"
popd
popd
REM Start web
start http://127.0.0.1

REM Start Nginx and PHP-FPM
pushd packages\%php_folder%
set PHP_FCGI_MAX_REQUESTS=0
set PHP_FCGI_CHILDREN=20
start /b RunHiddenConsole.exe php-cgi.exe -b 127.0.0.1:9123
popd
pushd "packages\%nginx_folder%"
echo "Nginx started!"
start /b .\nginx.exe
popd

REM Trap any key press to stop Nginx
echo Press any key to stop Nginx...
pause > nul

call stop.bat