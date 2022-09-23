<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public Post $post;

    protected array $rules = [
        'post.title' => 'required',
        'post.content' => 'required|min:8',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function editContent()
    {
        $this->validate();

        if (!$this->post->save()) {
            session()->flash('error', 'Erro ao editar os dados!');
        }

        session()->flash('success', 'Os dados foram editados com sucesso!');
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}
