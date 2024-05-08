<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageTest extends DuskTestCase
{
    
    public function test_home_page()
    {
        $this->browse(function (Browser $browser) {
            // visit('http://127.0.0.1:8000/')
            $browser->visit('/')
            ->assertSee('Documentation')
            ->assertSee('Laravel News')
            ->assertSee('Laracasts')
            ->assertSee('Vibrant Ecosystem')
            ->pause(3000);
        });
    }
}
