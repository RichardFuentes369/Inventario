<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nro_fact')->nullable();
            $table->string('fecha')->nullable();
            $table->string('pdf')->nullable();
            $table->double('price')->nullable();
            $table->string('user')->nullable();
            $table->integer('month_id')->unsigned(); //referencia id a la tabla compañia
            $table->foreign('month_id') //llave foranea
                  ->references('id')
                  ->on('months')
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
        Schema::dropIfExists('invoices');
    }
}
