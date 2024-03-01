<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = User::query()->latest()->get();
        return view('livewire.users.index', ['users' => $user]);
    }
}
