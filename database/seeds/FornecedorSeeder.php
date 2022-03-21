<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void   
     */
    public function run()
    {
        //Instanciando o Objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor.com.br';
        $fornecedor->uf = 'RS';
        $fornecedor->email = 'contato@fornecedor.cm.br';
        $fornecedor->save();

        //Metodo Create(Atenção para o atributo fillable da classe fornecedor)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'Fornecedor200.com.br',
            'uf' => 'RS',
            'email' => 'contatoFornecedor@gmail.com'
        ]);

        /*Insert 
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'Fornecedor300.com.br',
            'uf' => 'RS',
            'email' => 'contatoFornecedor300@gmail.com'
        ]);*/
    }
}
