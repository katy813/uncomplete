<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharityseasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charityseasons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('seasonName',100);
            $table->string('description');
            $table->date('duration');
            $table->char('unitname',50);
            $table->integer('unitvalue')->unsigned();
            $table->integer('numofunits')->nullable();
            $table->string('seasonphoto')->nullable();
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
        Schema::dropIfExists('charityseasons');
    }
}
