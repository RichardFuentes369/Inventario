<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nit')->nullable(); //nit del proveedor
            $table->string('business_name')->nullable(); //nombre de la empresa del proveedor
            $table->string('country')->nullable(); //pais de la empresa
            $table->string('department')->nullable(); //departamento de la empresa
            $table->string('county')->nullable(); //condado o municipio                         
            $table->string('neighborhood')->nullable(); //barrio
            $table->string('address')->nullable(); //direccion de la empresa
            $table->string('phone1')->nullable(); //telefono de contacto 1
            $table->string('phone2')->nullable(); //telefono de contacto 2
            $table->string('cellphone1')->nullable(); //celular de contacto 1
            $table->string('cellphone2')->nullable(); //celular de contacto 2
            $table->string('description')->nullable(); //descripcion de la empresa
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
        Schema::dropIfExists('providers');
    }
}

