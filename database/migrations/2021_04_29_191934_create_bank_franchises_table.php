<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_franchises', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('bank_id')->unsigned()->nullable();
            $table->bigInteger('franchise_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');

            $table->foreign('franchise_id')->references('id')->on('franchises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_franchises');
    }
}
