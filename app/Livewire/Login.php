<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

#[\Livewire\Attributes\Layout('layouts.guest')]

class Login extends Component
{
    #[\Livewire\Attributes\Rule('required')]
    public string $email = '';

    #[\Livewire\Attributes\Rule('required')]
    public string $password = '';
    
    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provide credential do not match our records.'
        ]);
    }
    
    public function render()
    {
        return view('livewire.login');
    }
}
