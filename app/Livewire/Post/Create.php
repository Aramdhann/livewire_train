<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

// this is action for component
class Create extends Component
{ 
    public PostForm $form;
    
    // you can call this save function to give action to the component create.blade.php
    public function save(): void
    {
        $this->form->store();
    }
    
    public function render()
    { 
        return view('livewire.post.create');
    }
}
