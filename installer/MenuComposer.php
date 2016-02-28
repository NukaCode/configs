<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use NukaCode\Menu\DropDown;
use NukaCode\Menu\Link;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $this->generateLeftMenu();
        $this->generateRightMenu();
    }
    
    /**
     * Adds items to the menu that appears on the left side of the main menu.
     */
    private function generateLeftMenu()
    {
        $leftMenu = \Menu::getMenu('leftMenu');

        $leftMenu->link('home', function (Link $link) {
            $link->name = 'Home';
            $link->url  = route('home');
        });
    }
    
    /**
     * Adds items to the menu that appears on the right side of the main menu.
     */
    private function generateRightMenu()
    {
        $rightMenu = \Menu::getMenu('rightMenu');
        
        // If they are a guest, offer them to log in.
        if (auth()->guest()) {
            $rightMenu->link('login', function (Link $link) {
                $link->name = 'Login';
                $link->url  = route('auth.login');
            });
            if (config('nukacode-user.enable_social') == false) {
                $rightMenu->link('register', function (Link $link) {
                    $link->name = 'Register';
                    $link->url  = route('auth.register');
                });
            }
        }
    }
}