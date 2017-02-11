<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table){

            $table->increments('id');
            $table->string('pavadinimas');
            $table->integer('metai');
            $table->text('zanras');
            $table->text('autorius');
            $table->text('nuotrauka');
            $table->text('apibudinimas');
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
        Schema::drop('books');
    
    }
}
