<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Posts Criados</x-slot>

    <a href="{{ route('post.create') }}">Novo Post</a>

    @if (session()->has('success'))
        <div class="w-full px-2 py-4 border border-green-500 bg-green-400 text-white">
            {{session('success')}}
        </div>
    @endif

    @foreach($posts as $post)
        @livewire('post.content', [$post], key($post->id))
    @endforeach

    {{ $posts->links() }}
</div>
