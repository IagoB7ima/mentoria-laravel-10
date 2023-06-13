<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Venda::create(
            [
                'numero_da_venda' => 1,
                'produto_id' => 5,
                'cliente_id' => 3,
            ]
        );

        Venda::create(
            [
                'numero_da_venda' => 2,
                'produto_id' => 5,
                'cliente_id' => 3,
            ]
        );
    }
}
