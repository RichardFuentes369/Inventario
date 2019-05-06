<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(); //nombre del producto
            $table->string('lote')->nullable(); //lote
            $table->date('manufacturing_date')->nullable(); //fecha de fabricacion
            $table->date('expiration_date')->nullable(); //fecha de vencimiento
            $table->integer('quantity')->nullable();//cantidad
            $table->double('price')->nullable(); //precio
            $table->integer('category_id')->unsigned(); //referencia id a la tabla compañia
            $table->foreign('category_id') //llave foranea
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('provider_id')->unsigned(); //referencia id a la tabla proveedores
            $table->foreign('provider_id') //llave foranea
                  ->references('id')
                  ->on('providers')
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
        Schema::dropIfExists('products');
    }
}
