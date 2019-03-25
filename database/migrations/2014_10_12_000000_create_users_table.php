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
            $table->string('name');
            $table->string('lastname'); 
            $table->string('email')->unique();
            $table->string('password')->default(bcrypt('123456'));
            $table->date('birthdate');
            $table->string('dni');
            $table->enum('sexo',['M','F']);
            $table->enum('category',['admin','seller']);
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
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
