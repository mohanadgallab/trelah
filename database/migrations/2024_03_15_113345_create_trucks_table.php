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
            $table->string('slug')->nullable();
            $table->string('image_path')->nullable();
            $table->string('long')->nullable();
            $table->string('width')->nullable();
            $table->string('weight')->nullable();
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
