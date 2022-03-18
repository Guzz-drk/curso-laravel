<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('email', 150);
            $table->string('uf', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            //$table->dropColumn('uf');
            $table->dropColumn(['uf', 'email']);

            //php artisan migrate:rollback -para voltar uma migração
            //php artisan migrate:rollback --step=2 -para voltar quantas migrações forem necessarias
            
        });
    }
}
