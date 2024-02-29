<?php

namespace App\Livewire\Post;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';

    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';
    
    public function save()
    {
        $user = User::find(1);

        $validated = $this->validate();
        
        $user->post()->create($validated);

        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.post.create');
    }
}
