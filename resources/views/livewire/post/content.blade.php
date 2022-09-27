<div class="my-10">
    <div class="flex">{{ $post->title }} -
        <a href="{{ route('post.edit', $post->id) }}" class="px-2 py-1 border border-blue-600"> Editar </a> |

        <livewire:post.delete :post="$post"></livewire:post>
    </div>
</div>
