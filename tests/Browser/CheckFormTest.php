<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;
use Carbon\Factory;

class CheckFormTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test_form_works(): void
    {
        // Ada 2 Cara
        // ->type('name', 'value')
        // ->check('#id')
        $this->browse(function (Browser $browser) {
            $browser->visit('/testpage')
                    ->waitForLocation('/testpage')
                    ->typeSlowly('text_input', 'input_value')
                    ->select('select_option', '2')
                    ->check('checkbox', 'checkboxDefault')
                    ->check('#checkboxChecked')
                    ->radio('radio_input', 'radioChecked')
                    ->scrollIntoView('#date')
                    ->pause(1000)
                    ->type('date', '10/05/2024')
                    ->pause(2000)
                    ->attach('file', public_path('img/chino.jpg'))
                ->pause(2000)

                ->press('Launch demo modal')
                    ->pause(2000)
                    ->within('#exampleModal', function(Browser $browser){
                        $browser->typeSlowly('text_input', 'input_value')
                        ->pause(2000)
                        ->press('Close');
                    })
                ->pause(2000)
                    ->press('Show live alert')
                    ->assertDialogOpened('Alert!')
                ->pause(2000)
                    ->acceptDialog()

                ->pause(2000)
                    ->press('Show live Confirm?')
                    ->assertDialogOpened('Confirm?')
                ->pause(2000)
                    ->dismissDialog()

                ->pause(2000)
                    ->press('Show live Confirm?')
                    ->assertDialogOpened('Confirm?')
                ->pause(2000)
                    ->acceptDialog()
                    ->pause(3000);
        });
    }
}
