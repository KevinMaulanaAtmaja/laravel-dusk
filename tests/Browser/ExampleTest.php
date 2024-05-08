<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            // visit('http://127.0.0.1:8000/')
            $browser->visit('')
                    ->assertSee('Laravel')
                    ->pause(3000);
        });
    }
}
