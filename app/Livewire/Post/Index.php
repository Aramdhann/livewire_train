<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class Index extends Component
{
    #[On('postCreated')]
    public function updateList($post): void
    {
        // code...
    }

    public function render()
    {
        return view('livewire.post.index', ['posts' => Post::query()->with('user')->latest()->get()]);
    }
}
