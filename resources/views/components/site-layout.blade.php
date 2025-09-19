<html>
<head>
    <title>Articles overview</title>
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
        <a href="/articles">All articles</a>
        |
        <a href="/authors">All authors</a>
        |
        <a href="/productcategories">Product Categories</a>
    </ol>
</header>

<main class="max-w-6xl mx-auto px-4 py-4">

    {{$slot}}

</main>


<footer class="bg-blue-900 text-white mt-100 min-h-20">

    <div class="max-w-6xl mx-auto px-20 py-4">
        Footer content
    </div>
</footer>
</body>

</html>
