<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::paginate(10);
        return view('livewire.post.index', compact('posts'));
    }
}
