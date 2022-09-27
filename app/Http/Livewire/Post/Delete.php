<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Delete extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        if (!$this->post->delete()) {
            session()->flash('error', 'Não foi possível remover este post');
        }

        session()->flash('success', 'Post removido com sucesso.');

        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.delete');
    }
}
