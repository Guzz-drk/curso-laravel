<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignProdutosProdutoDetalhes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Foreign key para produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');

            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //Foreign key para produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');

            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('produtos', function(Blueprint $table){
            $table->dropForeign('produtos_unidade_id_foreign');
            
            $table->dropColumn('unidade_id');
        });
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            
            $table->dropColumn('unidade_id');
        });
    }
}
