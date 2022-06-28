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
        Schema::create('catechumens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->integer('ci');
            $table->integer('phone');
            $table->date('birth');
            // $table->enum('baptism',['si','no']);
            // $table->enum('communion',['si','no']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null');
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('catechism_id')
            //         ->references('id')->on('catechisms')
            //         ->onDelete('set null');
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
        Schema::dropIfExists('catechumens');
    }
};
