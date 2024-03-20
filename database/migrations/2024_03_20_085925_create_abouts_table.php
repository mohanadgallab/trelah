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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->enum('lang',['ar','en'])->default('ar');
            $table->string('image_path');
            $table->text('title');
            $table->text('subtitle');
            $table->text('list_1');
            $table->text('list_2');
            $table->text('list_3');
            $table->text('list_4')->nullable();
            $table->text('list_5')->nullable();
            $table->text('end');
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
        Schema::dropIfExists('abouts');
    }
};
