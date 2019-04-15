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
            $table->increments('id');
            $table->string('name'); //nombres del cliente
            $table->string('lastname'); //apellidos del cliente
            $table->date('birthdate'); //fecha de nacimiento
            $table->enum('document_type',['pasaporte','cc', 'ti']);
            $table->string('dni'); //documento de identidad
            $table->enum('sexo',['M','F']); //sexo del cliente
            $table->string('email')->unique(); //correo del cliente
            $table->string('department')->nullable(); //departamento de ubicaciónn del cliente
            $table->string('county')->nullable(); //condado o municipio
            $table->string('neighborhood')->nullable(); //barrio
            $table->string('address')->nullable(); //direccion del cliente
            $table->string('phone')->nullable(); //telefono del cliente
            $table->string('cellphone')->nullable(); //celular del cliente
            $table->integer('companies_id')->unsigned(); //referencia id a la tabla compañia
            $table->foreign('companies_id') //llave foranea
                  ->references('id')
                  ->on('companies')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
