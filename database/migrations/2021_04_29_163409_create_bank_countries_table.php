<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_countries', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('bank_id')->unsigned()->nullable();
            $table->bigInteger('country_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('banks');

            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_countries');
    }
}
