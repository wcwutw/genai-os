<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\SystemSetting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
		$setting = new SystemSetting();
		$setting->fill([
			'key' => 'agent_location',
			'value' => 'http://localhost:9000/',
		]);
		$setting->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		
    }
};
