<ul class="list-group list-group-flush">
    @foreach($products as $product)
<<<<<<< HEAD
        <li class="list-group-item bg--light">
=======
        <li class="list-group-item">
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            <a href="{{route('product',$product->slug)}}" >
                {{$product['name']}}
            </a>
        </li>
    @endforeach
</ul>
