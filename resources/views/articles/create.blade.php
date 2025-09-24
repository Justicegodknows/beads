<html>
<head>
    <title>Create New Article</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="">
<header class="max-w-10xl mx-auto bg-blue-500 text-xl text-white mb-4 flex items-center h-12">
    <div class="mr-10">
       <a href="/">Beautiful African Beads</a>
    </div>
</header>
<header class="max-w-6xl mx-auto bg-blue-300 text-lg text-white mb-4 flex items-center h-10">
    <ol>
        
        <a href="/authors">All authors</a>
       
    </ol>
</header>

<main class="max-w-6xl mx-auto px-4 py-4">
    <h1 class="text-2xl font-bold mb-4">Create New Article</h1>
    <form action="{{ route('articles.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Article Title</label>
                <input type="text" name="title" id="title" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" />
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Article Content</label>
                <textarea name="content" id="content" rows="5" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"></textarea>
                @error('content')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Create Article</button>
            </div>
        </form>

</html>
</main>   