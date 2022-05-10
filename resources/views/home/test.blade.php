@foreach($categoriesx as $category)

    ana kategori : {{ $category->title }}
    <br>
    alt kategorileri :
    @foreach($category->getChildren as $child)
        ({{ $child->title }})
    @endforeach
    <br>


@endforeach
