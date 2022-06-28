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
        Schema::create('catechism_catechumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catechism_id');
            $table->unsignedBigInteger('catechumen_id');
            $table->boolean('asistencia');
            $table->foreign('catechism_id')->references('id')->on('catechisms')->unique()->ondelete('cascade');
            $table->foreign('catechumen_id')->references('id')->on('catechumens')->ondelete('cascade');
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
        Schema::dropIfExists('catechism_catechumen');
    }
};
