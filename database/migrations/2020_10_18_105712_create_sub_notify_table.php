<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubNotifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_notify', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('msisdn', 160);
            $table->text('json_data');
            $table->string('app_id', 60);
            $table->string('sub_status', 60);
            $table->tinyInteger('subscribed');
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
        Schema::dropIfExists('sub_notify');
    }
}
