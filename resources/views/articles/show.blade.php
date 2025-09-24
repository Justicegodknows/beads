
<x-site-layout>
    <h1 class="text-4xl font-bold">{{$article->title}}</h1>

    <div class="mb-2 text-blue-800">by our reporter: {{$article->author->name}}</div>

    <div>
        {{$article->content}}
    </div>

    <h2 class="text-2xl font-bold mt-4">Comments</h2>
    <div>
        @if($article->comments)
            @foreach ($article->comments->take(200) as $comment)
                <div>
                    {{$comment->content}}
                </div>
            @endforeach
        @else
            <p>No comments yet.</p>
        @endif
    </div>

</x-site-layout>