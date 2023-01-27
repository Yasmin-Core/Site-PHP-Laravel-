<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CrudTest extends DuskTestCase
{
    public function testCadastroCliente()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/')
            ->assertSee('corte')
            >pause(5000)
            //Testar o botão de agendamento da home
            ->click('@init')
            ->assertPathIs('/agendamento')
            //Encontrar a expressão 'Agendamento' dentro da pagina
            ->assertSee('Agendamento')
            ->pause(3000)
            //Preenchendo o form
            ->type('name', 'Ana')
            ->typeSlowly('email', 'ana@gmail.com')
            ->pause(5000);
        });
    }
}
