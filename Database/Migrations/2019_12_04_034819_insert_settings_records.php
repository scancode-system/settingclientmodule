<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Setting; 

class InsertSettingsRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Setting::create(['module' => 'SettingClient', 'alias' => 'Cliente']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       (Setting::where('module', 'SettingClient')->first())->delete();
    }
}
