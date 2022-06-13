<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
           {{-- @yield('carousel-items') --}}
            @foreach($carouselSliderData as $rs)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ Storage::url($rs->image) }}" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>{!! $rs->title !!}</h3>
                        <h1>{!! $rs->description !!}</h1>
                        <a class="btn btn-custom" href="{{ route('home.treatmentDetailPage', ['id'=>$rs->id]) }}">Daha Fazlası</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->
