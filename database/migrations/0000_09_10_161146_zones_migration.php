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
        //crear la tabla zones 
        Schema::create('zones',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //borrar cosas de la tabla
    }
};
