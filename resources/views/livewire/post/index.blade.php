<div>
    <ul>
        @foreach($contents as $content)
            <li class="block">{{ $content->title }}</li>
        @endforeach

    </ul>
    {{ $contents->links() }}
</div>
