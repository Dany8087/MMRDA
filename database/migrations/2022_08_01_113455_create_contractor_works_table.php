<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_works', function (Blueprint $table) {
            $table->id();
            $table->string('CompanyName');
            $table->string('ShortDescription');
            $table->string('LongDescription');
            $table->dateTime('Startdate');
            $table->dateTime('CompletionDate');
            $table->integer('Penaltyrate');
            $table->string('line1');
            $table->string('Line2');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->string('typeOfRoadConstructed');
            $table->dateTime('expiryDate');
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
        Schema::dropIfExists('contractor_works');
    }
};
