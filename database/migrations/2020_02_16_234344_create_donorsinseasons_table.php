<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsinseasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donorsinseasons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('season_id');
            $table->foreign('season_id')->references('id')->on('charityseasons');
            $table->unsignedBigInteger('donor_id');
            $table->foreign('donor_id')->references('id')->on('users');
            $table->integer('donationvalue')->unsigned();
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
        Schema::dropIfExists('donorsinseasons');
    }
}
