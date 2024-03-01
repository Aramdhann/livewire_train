<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

// this is action for component
class Create extends Component
{
    public PostForm $form;

    // you can call this save function to give action to the component create.blade.php
    public function save(): void
    {
        $post = $this->form->store();
        $this->dispatch('postCreated', $post->id);
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
