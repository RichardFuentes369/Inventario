<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name')->nullable(); //nombre de la compañia
            $table->string('address')->nullable(); //direccion de la compañia
            $table->string('country')->nullable(); //pais de la compañia
            $table->string('department')->nullable(); //departamento de la compañia
            $table->string('county')->nullable(); //condado o municipio
            $table->string('neighborhood')->nullable(); //barrio
            $table->string('phone1')->nullable(); //telefono de contacto 1
            $table->string('phone2')->nullable(); //telefono de contacto 2
            $table->string('cellphone1')->nullable(); //celular de contacto 1
            $table->string('cellphone2')->nullable(); //celular de contacto 2
            $table->string('description')->nullable(); //descripcion de la empresa
            $table->string('email')->unique(); //correo de la empresa
            $table->enum('sector',['private','public']); //secctor de la empresa
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
        Schema::dropIfExists('companies');
    }
}
