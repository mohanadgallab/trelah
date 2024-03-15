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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->enum('lang', ['ar','en'])->default('ar');
            $table->string('name');
            $stable->string('slug')->nullable();
            $table->string('truck_image')->nullable();
            $table->string('long');
            $table->string('width');
            $table->string('weight');
            $table->string('area_1')->nullable();
            $table->string('area_2')->nullable();
            $table->string('area_3')->nullable();
            $table->string('area_4')->nullable();
            $table->string('area_5')->nullable();
            $table->string('area_6')->nullable();
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
        Schema::dropIfExists('trucks');
    }
};
