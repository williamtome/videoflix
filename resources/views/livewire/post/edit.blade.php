<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Editar Post</x-slot>

    @if (session()->has('success'))
        <div class="w-full px-2 py-4 border border-green-500 bg-green-400 text-white">
            {{session('success')}}
        </div>
    @endif

    <div class="mb-5">
        <label class="block">Título</label>
        <input type="text" wire:model.defer="post.title">

        @error('post.title')
        <strong>{{$message}}</strong>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block">Conteúdo</label>
        <input type="text" wire:model="post.content" wire:keydown.enter="editContent">

        @error('post.content')
        <strong>{{$message}}</strong>
        @enderror
    </div>

    <button
        wire:click="editContent"
        class="border border-green-500 px-5 py-2 rounded"
    >
        Salvar
    </button>
</div>
