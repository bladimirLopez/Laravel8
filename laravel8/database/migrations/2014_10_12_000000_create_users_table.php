<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer Unsigned Increment
            $table->string('name');//varchar 255 character
            $table->string('email')->unique();//unique para proteger y es unico.
            $table->timestamp('email_verified_at')->nullable();//para guardar fecha
            $table->string('password');
            $table->rememberToken();//varchar se almacena 1 token
            $table->timestamps();//crea 2 columnas de created y updated
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
