<div>
    @foreach($posts as $post)
        @livewire('post.content', [$post], key($post->id))
    @endforeach

    {{ $posts->links() }}
</div>
