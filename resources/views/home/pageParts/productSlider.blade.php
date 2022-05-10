<!-- Treatment Carousel Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bbb_main_container">
                    <div class="bbb_viewed_title_container">
                        <h3 class="bbb_viewed_title">Popüler Paketler</h3>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider">
                                @foreach($carouselTreatmentSliderData as $rs)
                                <div class="owl-item">
                                    <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="bbb_viewed_image"><img src="{{ Storage::url($rs->image) }}" alt=""></div>
                                        <div class="bbb_viewed_content text-center">
                                            <div class="bbb_viewed_price">{{ $rs->price }}</div>
                                            <!--  <div class="bbb_viewed_price">₹12225<span>₹13300</span></div>
                                                yukarıdaki span içindeki fiyatın üstü çizili olur. 12225 indirimli fiyat
                                            -->
                                            <div class="bbb_viewed_name"><a href="/treatmentDetailPage/{{ $rs->id }}">{{ $rs->title }}</a></div>
                                        </div>
                                        <ul class="item_marks">
                                            <!--
                                            <li class="item_mark item_discount">-25%</li>
                                            bu card ın üstünde %25 indirim şeklinde bir yuvarlak çıkarıyor
                                            -->
                                            <li class="item_mark item_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Treatment Carousel ENDS -->
