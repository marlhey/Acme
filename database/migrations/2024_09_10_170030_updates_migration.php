<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //crear tabla Updates
        Schema::create('updates',function(Blueprint $table){
            $table->increments('id');
            $table->string('file_name');

            //crear campo id_user y relacion con la tabla users
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            
            //crear campo id_plan y relacion con la tabla plan
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_plan')->references('id')->on('plans');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
