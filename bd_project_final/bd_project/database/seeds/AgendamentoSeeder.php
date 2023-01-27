<?php
//Registro no banco de dados

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AgendamentoSeeder extends Seeder
{
    /**
     *Execute banco de dados.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Yasmin '.Str::random(5),
            'email' => 'yasmin.'.Str::random(5).'@ifsp.com',
            'data' => '28/11/2022'.Str::random(10),
            'horario' => '10:00'.Str::random(5),
            'servico' => 'corte'.Str::random(10),
        ]);
    }
}

