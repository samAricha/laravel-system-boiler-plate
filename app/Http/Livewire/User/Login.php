<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.user.login')->layout('layouts.user-login');
    }
}
