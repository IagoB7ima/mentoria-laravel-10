<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'Victor Padovam',
                'email' => 'v@gmail.com',
                'endereco' => 'Rua x',
                'logradouro' => 'Rua x',
                'cep' => '00000000',
                'bairro' => 'Jardim x',
            ]
        );
        Cliente::create(
            [
                'nome' => 'Iago Batista ',
                'email' => 'i@gmail.com',
                'endereco' => 'Rua Y',
                'logradouro' => 'Rua Y',
                'cep' => '00000000',
                'bairro' => 'Jardim Y',
            ]
        );
    }
}
