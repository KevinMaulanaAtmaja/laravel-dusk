<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CheckCrudTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_create_form(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/crud')
            ->clickLink('+ Tambah Crud')
                ->typeSlowly('name', 'input_value')
                ->press('Simpan')
                ->assertSee('Berhasil menambahkan Data!')
                ->pause(2000);
        });
    }

    public function test_edit_form()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/crud')
            ->click('table > tbody > tr:last-child > td:nth-child(2) > a')
            ->typeSlowly('name', 'change_name2')
            ->press('Simpan')
                ->assertSee('Berhasil update Data!')
                ->pause(3000);
        });
    }
    public function test_delete_form()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/crud')
            ->click('table > tbody > tr:last-child > td:nth-child(2) > form > button')
            ->press('Hapus')
            ->acceptDialog()
                ->assertSee('Berhasil hapus Data!')
                ->pause(3000);
        });
    }
}
