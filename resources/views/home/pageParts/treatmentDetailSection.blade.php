<!-- Demo page craeted by https://github.com/petr-goca -->
<section aria-label="Main content" role="main" class="product-detail">
    <div itemscope itemtype="http://schema.org/Product">
        <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
        <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
        <div class="shadow">
            <div class="_cont detail-top">
                <div class="cols">
                    <div class="left-col">
                        <div class="thumbs">
                            <a class="thumb-image active" href="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025" data-index="0">
                                <span><img src="{{Storage::url($treatment->image)}}" alt="Tommy Hilfiger T-Shirt New York"></span>
                            </a>
                            @foreach($treatmentImages as $rs)
                                <a class="thumb-image" href="{{Storage::url($rs->image)}}" data-index="1">
                                    <span><img src="{{Storage::url($rs->image)}}"></span>
                                </a>
                            @endforeach

                        </div>
                        <div class="big">
                            <span id="big-image" class="img" quickbeam="image" style="background-image: url('{{Storage::url($treatment->image)}}')" data-src="{{Storage::url($treatment->image)}}"></span>
                            <div id="banner-gallery" class="swipe">
                                <div class="swipe-wrap">
                                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                                    <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-col">
                        <h1 itemprop="name">{{ $treatment->title }}</h1>
                        <label>{{ $treatment->getCategory->title }}</label>
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <meta itemprop="priceCurrency" content="USD">
                            <link itemprop="availability" href="http://schema.org/InStock">
                            <div class="price-shipping">
                                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="{{ $treatment->price }}">
                                    ₺{{ $treatment->price }}
                                </div>
                            </div>

                            <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                            <form id="AddToCartForm">
                                <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                                    <option  selected="selected"  data-sku="" value="7924994501">
                                        M / Blue - $800.00 USD
                                    </option>
                                    <option  data-sku="" value="7924995077">
                                        M / Red - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994437">
                                        L / Blue - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994693">
                                        L / Yellow - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924995013">
                                        L / Red - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994373">
                                        XL / Blue - $900.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994629">
                                        XL / Yellow - $850.00 USD
                                    </option>
                                    <option  data-sku="" value="7924830021">
                                        XXL / Blue - $950.00 USD
                                    </option>
                                    <option  data-sku="" value="7924994885">
                                        XXL / Red - $850.00 USD
                                    </option>
                                </select>
                                <div class="btn-and-quantity-wrap">
                                    <div class="btn-and-quantity">
                                        <a href="">
                                            <div id="AddToCart" quickbeam="add-to-cart">
                                                <span id="AddToCartText">Satın Al</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="tabs">
                                <div class="tab-labels">
                                    <span data-id="1" class="active" id="detail">Detay</span>
                                    <span data-id="2" class="" id="properties">Paket Özellikleri</span>
                                </div>
                                <div class="tab-slides">
                                    <div id="tab-slide-1" itemprop="description"  class="slide active detail">
                                        {!! $treatment->detail !!}
                                    </div>
                                    <div id="tab-slide-2" class="slide">
                                        Kategori : {{ $treatment->getCategory->title }} <br>
                                        Açıklama : {!! $treatment->description !!} <br>
                                        Anahtar Kelimeler : {{ $treatment->keywords }} <br>
                                        Fiyat : {{ $treatment->price }} <br>
                                        Aylık sıklık : {{ $treatment->frequency }} <br>
                                        Paketin uzunluğu : {{ $treatment->duration }} <br>
                                        Doktor : {{ $treatment->getUser->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="social-sharing-btn-wrapper">
                                <span id="social_sharing_btn">Share</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>


<!-- Quickbeam cart-->

<div id="quick-cart" quickbeam="cart">
    <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
    <span>
      <strong class="quick-cart-text">Pay<br></strong>
      <span id="quick-cart-price">0</span>
      <span id="quick-cart-pay-total-count">0</span>
    </span>
    </a>
</div>

<!-- Quickbeam cart end -->
