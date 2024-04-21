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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('paragraph');
            $table->foreignId('service_id')->constrained('services')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('l_1');
            $table->text('l_2');
            $table->text('l_3');
            $table->text('l_4');
            $table->text('l_5');
            $table->text('l_6');
            $table->text('l_7');
            $table->text('l_8');
            $table->text('l_9');
            $table->text('l_10');
            $table->text('l_11');
            $table->text('l_12');
            $table->text('l_13');
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
        Schema::dropIfExists('stories');
    }
};
