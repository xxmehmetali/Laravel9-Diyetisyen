<!-- Category Cards Start -->
<div class="container">
    <div class="row">
        @for($i=0; $i<3; $i++)
            <div class="col-md-4">
                <a href="/category/{{ $categoriesForCategoryCards[$i]->id }}" class="card" style="background: url({{ Storage::url($categoriesForCategoryCards[$i]->image) }}); background-size: 100% 100%; background-repeat: no-repeat;">
                    <div class="inner">

                        <h2 class="title">{{ $categoriesForCategoryCards[$i]->title }}</h2>
                        <time class="subtitle">03. März 2021</time>
                    </div>
                </a>
            </div>
        @endfor
    </div>

</div>

<!-- Category Cards End -->
