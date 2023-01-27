<?php

namespace App;

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


use App\Helpers\DataBuilders\AgendamentoDataBuilder;
use App\Agendamento;//model



class AgendamentoTest extends Authenticatable
{   


        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'p_name', 
            's_name',
            'email',
            'data',
            'horario',
            'servico',
        ];
        
        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
}
