<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Content extends Component
{
    public Post $post;

    public function mount($post): void
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post.content');
    }
}
