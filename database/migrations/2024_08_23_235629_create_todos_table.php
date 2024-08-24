<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' auto-incremental
            $table->string('name'); // Cria uma coluna 'name' do tipo string
            $table->boolean('completed')->default(false); // Cria uma coluna 'completed' do tipo booleano com valor padrão 'false'
            $table->timestamps(); // Adiciona as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos'); // Remove a tabela 'todos' se necessário
    }
}
