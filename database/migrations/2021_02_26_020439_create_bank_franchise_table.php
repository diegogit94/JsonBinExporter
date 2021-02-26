<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankFranchiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_franchise', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('bank_id')->unsigned()->nullable();
            $table->bigInteger('franchise_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('bank_id')->references('id')->on('banks');

            $table->foreign('franchise_id')->references('id')->on('franchises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_franchise');
    }
}
