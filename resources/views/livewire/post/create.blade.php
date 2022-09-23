<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Criar Novo Post</x-slot>

    @if (session()->has('success'))
        <div class="w-full px-2 py-4 border border-green-500 bg-green-400 text-white">
            {{session('success')}}
        </div>
    @endif
    <h1>Exemplo componente Livewire!</h1>

    Bind acontecendo aqui: {{$title}}
    <br>

    <div class="mb-5">
        <label class="block">Título</label>
        <input type="text" wire:model.defer="title">

        @error('title')
        <strong>{{$message}}</strong>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block">Conteúdo</label>
        <input type="text" wire:model="content" wire:keydown.enter="saveContent">

        @error('content')
        <strong>{{$message}}</strong>
        @enderror
    </div>

    <button
        wire:click="saveContent"
        class="border border-green-500 px-5 py-2 rounded"
    >
        Enviar
    </button>
</div>
