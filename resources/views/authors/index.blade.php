<x-site-layout>
    <h1 class="text-4xl font-bold">Authors overview</h1>
    @foreach($authors as $author)
        <div>
            <a href="/authors/{{$author->id}}">{{ $author->name }}</a>
        </div>
    @endforeach
</x-site-layout>