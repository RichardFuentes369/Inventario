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
            $table->enum('document_type',['pasaporte','cc', 'ti']); //tipo de documento
            $table->string('dni'); //documento de idenificación del admin o vendedor
            $table->enum('sexo',['M','F']); //sexo de admin o vendedor
            $table->string('phone')->nullable(); //telefono del admin o vendedor
            $table->string('cellphone')->nullable(); //celular del admin o vendedor
            $table->string('address')->nullable(); //dirección del admin o vendedor
            $table->string('department')->nullable(); //departamento de ubicaciónn del vendedor
            $table->string('county')->nullable(); //ciudad o municipio
            $table->string('neighborhood')->nullable(); //barrio
            $table->string('email')->unique(); //correo del admin o vendedor
            $table->string('password')->default(bcrypt('123456')); //contraseña del admin o vendedor
            $table->enum('category',['admin','seller']); //categoria admin o vendedor
            $table->integer('companies_id')->unsigned(); //referencia id a la tabla compañia
            $table->foreign('companies_id') //llave foranea
                  ->references('id')
                  ->on('companies')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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

