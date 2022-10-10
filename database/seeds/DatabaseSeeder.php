<?php

//utilizamos os seeders para pre-definir registros na tabela como por exemplo, um usario padrao
//assim toda vez que dermos o comando 'php artisan db:seed' ele salvará no banco esses dados

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
        // $this->call(UserSeeder::class);
        $this->call(MotivoContatoSeeder::class);
        $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
    }
}
