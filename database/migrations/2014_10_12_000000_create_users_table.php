<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name'); //nombre del admn o vendedor
            $table->string('lastname'); //apellido del admin o vendedor
            $table->date('birthdate'); //fecha de nacimiento del admin o vendedor
            $table->string('dni'); //documento de idenificación del admin o vendedor
            $table->enum('sexo',['M','F']); //sexo de admin o vendedor
            $table->string('phone')->nullable(); //telefono del admin o vendedor
            $table->string('cellphone')->nullable(); //celular del admin o vendedor
            $table->string('email')->unique(); //correo del admin o vendedor
            $table->string('password')->default(bcrypt('123456')); //contraseña del admin o vendedor
            $table->enum('category',['admin','seller']); //categoria admin o vendedor
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

