<?php

return [
    'route' => '聊天',

    'hint.select_a_chatroom' => '請選一個聊天室來開始聊天',
    'header.new_chat' => '目前指定聊天模型',
    'prompt_area.hint' => '請在此輸入訊息',
    'button.new_chat' => '新對話',
    'button.unchain' => '單筆問答',
    'button.chained' => '連貫問答',
    'button.cancel' => '取消',
    'button.delete' => '刪除',
    'react_btn.safety_guard' => '安全檢查',
    'return_to_menu' => '回到主選單',
    'button.export_chat' => '匯出聊天紀錄',
    'tooltip.json_btn' => '無跳脫的JSON格式',
    'tooltip.TSV' => 'Tab分隔，可由Excel讀入',
    'button.download.TXT' => '下載TXT檔',
    'button.download.JSON' => '下載JSON檔',
    'button.download.PDF' => '下載PDF檔',
    'button.download.DOC' => '下載DOC檔',
    'label.TSV' => 'Tab分隔資料(.txt檔)',
    'label.JSON' => 'JSON格式(.json檔)',
    'label.share_link' => '分享連結 (目前只有自己可存取)',
    'react_btn.copy' => '複製',
    'react_btn.like' => '讚',
    'react_btn.dislike' => '倒讚',
    'react_btn.translate' => '用該模型翻譯',
    'react_btn.quote' => '引用該訊息',

    'modal.export.header' => '匯出聊天紀錄',
    'modal.import.header' => '匯入聊天紀錄',
    'modal.import.button.file' => '從檔案匯入',
    'modal.import.hint.drag_and_drop' => '您也可以將檔案拖放至此...',
    'modal.import.submit' => '匯入',
    'hint.send.empty' => '你無法傳送空訊息',
    'hint.send.still_processing' => '仍在處理之前的請求，如果卡了太久，請嘗試重新整理網頁。',
    'hint.must_select_llm' => '你沒有選擇任何要聊天的模型，請先選一個！',
    'hint.please_refresh' => '好像有東西出錯了！請重新整理網頁。',

    'modal.feedback.header' => '提供意見',
    'modal.feedback.label.correct' => '正確無誤',
    'modal.feedback.label.easy to understand' => '簡潔易懂',
    'modal.feedback.label.complete' => '回答完整',
    'modal.feedback.label.unsafe' => '令人反感',
    'modal.feedback.label.incorrect' => '事實不符',
    'modal.feedback.label.inrelvent' => '答非所問',
    'modal.feedback.label.language' => '語言錯誤',
    'modal.feedback.hint.bad' => '提供其他意見或建議回答',
    'modal.feedback.hint.good' => '為什麼喜歡這個回答？',
    'modal.feedback.button.submit' => '送出意見',

    'button.upload_file' => '上傳檔案',
    'hint.llm_returned_empty' => '[很抱歉目前模型忙碌中，請稍後再試，若問題一直持續再請回報]',
    'hint.please_retry_later' => '[很抱歉，有東西壞掉了，請稍後再試]',
    'hint.file_too_large' => '檔案過大',
    'hint.no_worker' => '[很抱歉，目前沒有可處理該訊息的機器，請回報給管理員或稍後再試！]',
    'hint.url_required' => '該模型需由URL連結作為開頭',
    'hint.first_url' => '該模型僅允許由一個URL連結作為開頭！',
    'hint.file_required' => '需要由一個文件起頭才能使用該模型，<br>請先上傳一個文件檔案(上限10MB)',
    'hint.input_too_large' => '[很抱歉，輸入的訊息太長了！]',
    'llm.describe_default' => '該語言模型當前可用！',
    'hint.human_feedback_only' => '此處用於模型回饋蒐集，只能匯入匯出。',

    'label.multiple_send' => '多選傳送',
    'label.direct_send' => '單選傳送',
    'modal.delete_chat.header' => '您確定要刪除聊天室 ',
    'hint.no_permission_to_upload_file' => '很抱歉，但您沒有上傳檔案的權限',
    'hint.no_llms' => '沒有可用的模型<br>請稍後再回來看看！',
    'button.verilog_compile_test' => '編譯測試',
    'hint.backend_offline' => '後端離線',
    'label.compiling' => '編譯中',
    'hint.success' => '成功',
    'hint.failed' => '失敗',
    "hint.copied"=> "已複製",
    'hint.processing' => '訊息處理中...請稍後...',
    'hint.upload_file_too_large' => '檔案大小超過限制',
    'hint.upload_not_allowed_ext' => '未允許上傳的檔案類型',
    'hint.upload_disabled_by_admin' => '上傳檔案功能已被管理員關閉',
];
