<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //nombres del cliente
            $table->string('lastname'); //apellidos del cliente
            $table->date('birthdate'); //fecha de nacimiento
            $table->enum('document_type',['nacional','extranjeria']);
            $table->string('dni'); //documento de identidad
            $table->enum('sexo',['M','F']); //sexo del cliente
            $table->string('email')->unique(); //correo del cliente
            $table->string('address')->nullable(); //direccion del cliente
            $table->string('phone')->nullable(); //telefono del cliente
            $table->string('cellphone')->nullable(); //celular del cliente
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
        Schema::dropIfExists('customers');
    }
}
