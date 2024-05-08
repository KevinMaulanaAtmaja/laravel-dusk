<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CheckAuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_register(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Register')
            ->type('username', 'admin2')
            ->type('email', 'admin2@gmail.com')
            ->type('password', 'admin123')
            ->typeSlowly('password_confirmation', 'admin123')
            ->press('Register')
            ->assertSee('User berhasil register!')
            ->pause(3000);
        });
    }

    public function test_login_validation(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('tipeLogin', 'randomadmin')
                ->typeSlowly('password', 'admin123')
                ->press('Login')
                ->assertSee('Username, email, atau Password salah!')
                ->pause(3000);
        });
    }

    public function test_login(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('tipeLogin', 'admin')
            ->typeSlowly('password', 'admin')
            ->press('Login')
            ->assertSee('User berhasil login!')
            ->pause(3000);
        });
    }
    public function test_logout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/crud')
            ->pause(2000)
            ->press('Logout')
            ->assertSee('User berhasil logout!')
            ->pause(3000);
        });
    }
}
