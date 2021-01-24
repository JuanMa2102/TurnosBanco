<?php

namespace Database\Seeders;

use App\Models\catoperation;
use Illuminate\Database\Seeder;

class CatOperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        catoperation::create([
            'description' => 'Retiro',            
        ]);
        catoperation::create([
            'description' => 'Depósito',            
        ]);
        catoperation::create([
            'description' => 'Atencion a clientes',            
        ]);
    }
}
