<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_start')->default(1);
            $table->boolean('corporate_name')->default(1);
            $table->boolean('cpf_cnpj')->default(1);
            $table->boolean('buyer')->default(1);
            $table->boolean('phone')->default(1);
            $table->boolean('email')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_clients');
    }
}
