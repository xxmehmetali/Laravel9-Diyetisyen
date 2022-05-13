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
        <aside class="related">
            <div class="_cont">
                <h2>You might also like</h2>
                <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
                    <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_70d2887b-ec6a-4bcb-a93b-7fd1783e6445_grande.jpg?v=1447530130')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 2</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                    <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_357767df-d7ff-4b58-b705-edde76bb32b7_grande.jpg?v=1447530150')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_613d5776-ea61-4f9b-abef-0ce847c63a67_grande.jpg?v=1447530150')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 3</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                    <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4" class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_0e98498a-123c-4305-9d94-d8280bb46416_grande.jpg?v=1447530164')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_6c949188-dba0-4789-9434-c0821b92f3f4_grande.jpg?v=1447530164')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 4</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                    <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_7d606126-1b60-4738-99b3-062810f2db8b_grande.png?v=1447530674')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_fd08d231-654c-4304-81b2-9191e6fd141e_grande.jpg?v=1447530674')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 5</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                    <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_bba77d82-7f85-47af-9a45-f4700bcc04ad_grande.jpg?v=1447530689')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_f065e961-d296-48a8-8a67-a3532200e257_grande.png?v=1447530689')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 6</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                    <a class="product-box hidden">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_bf59c7f2-7c1f-4822-9494-6a984598a56c_grande.jpg?v=1447530706')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_c6fa0fc1-99a0-4bd0-a1d8-0270127977fc_grande.jpg?v=1447530706')"></span>
            </span>
                        <span class="text">
              <strong>Tony Hunfinger T-Shirt New York 7</strong>
              <span>
                From $800.00
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
                    </a>
                </div>
                <div class="more-products" id="more-products-wrap">
                    <span id="more-products" data-rows_per_page="1">More products</span>
                </div>
            </div>
        </aside>
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
