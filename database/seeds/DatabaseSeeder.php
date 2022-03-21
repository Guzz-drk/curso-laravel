<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
        //para processar uma única seed - (php artisan db:seed --class 'nome da classe seeder') - 
    }
}
