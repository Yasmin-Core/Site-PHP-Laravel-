<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CadastroTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function xtestAbrePaginaCadastro()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
