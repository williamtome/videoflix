<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Posts Criados</x-slot>

    @foreach($posts as $post)
        @livewire('post.content', [$post], key($post->id))
    @endforeach

    {{ $posts->links() }}
</div>
