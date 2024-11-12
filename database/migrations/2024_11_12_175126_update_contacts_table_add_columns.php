<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('nome');      // Coluna para o nome
            $table->string('email');     // Coluna para o email
            $table->string('celular');   // Coluna para o celular
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn(['nome', 'email', 'celular']);
        });
    }
};
