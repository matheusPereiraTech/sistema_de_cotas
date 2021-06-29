<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    
    /** @test */
    /*public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                    ->assertSee('Password');
        });
    } */

    /** @test */
        public function check_if_working()
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('/login')
                        ->type('email', 'joaozinho@gmail.com')
                        ->type('password', '123456789')
                        ->press('Login')
                        ->assertPathIs('/home');
            });
        }
}