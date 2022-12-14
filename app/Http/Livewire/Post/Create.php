<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required|min:8',
    ];

    public function saveContent()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset('title', 'content');

        session()->flash('success', 'Os dados foram salvos com sucesso!');
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
