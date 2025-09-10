
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Beads shop</title>
</head>
<body>
    <h1>My Beads Shop</h1>

@if ($articles)->count() === 0)
    <p>I sell beautiful beads</p>
@else
    <ul>
        @foreach ($articles as $article)
            <li class="article">
                <h2>
                    <a href="/articles/{{$article->id}}">
                        {{ $article->title }}
                    </a>
                </h2>
                <p class="meta">
                    By {{ $article->author?->name ?? 'Unknown author' }}
                    {{ $article->created_at }}
                </p>
            </li>
        @endforeach
    </ul>
    @endif
    </body>
    </html>
