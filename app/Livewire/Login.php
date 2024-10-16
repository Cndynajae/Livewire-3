<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Layout('layouts.guest')]
class Login extends Component
{
    public function login()
    {
        dd('logged.in');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
