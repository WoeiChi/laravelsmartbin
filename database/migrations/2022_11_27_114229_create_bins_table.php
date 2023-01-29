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
        Schema::create('bin', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->string('compartment');
            $table->integer('remaining');
            $table->string('status');
            $table->dateTime('date');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bin');
    }
};
