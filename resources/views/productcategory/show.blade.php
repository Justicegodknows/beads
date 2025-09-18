<x-site-layout>
    <h1 class="text-4xl font-bold">Product Categories overview</h1>
    @foreach($productcategories as $productcategory)
        <div>
            <a href="/productcategory/{{$productcategory->id}}">{{ $productcategory->name }}</a>
        </div>
    @endforeach
</x-site-layout>