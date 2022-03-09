<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbuntusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubuntuses', function (Blueprint $table) {          
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fecha');
            $table->string('valor');
            $table->string('cedula')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();  
            $table->string('phone')->unique();
            $table->string('contact_name');
            $table->string('contact_phone')->unique();  
                 
            $table->foreignId('habitacion_id')->references('id')->on('habitacions');         
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
        Schema::dropIfExists('ubuntuses');
    }
}
