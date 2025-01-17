
@extends('users.layouts.template')
@section('content')        

    <section class="home-slider position-relative mb-30">
        <div class="container">
            <div class="home-slide-cover mt-30">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                    <div class="single-hero-slider single-animation-wrap" style="background-imagFE/e: url(assets/imgs/slider/slider-1.png)">
                        <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                Don’t miss amazing<br />
                                grocery deals
                            </h1>
                            <p class="mb-65">Sign up for the daily newsletter</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="single-hero-slider single-animation-wrap" style="background-imagFE/e: url(assets/imgs/slider/slider-2.png)">
                        <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                Fresh Vegetables<br />
                                Big discount
                            </h1>
                            <p class="mb-65">Save up to 50% off on your first order</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </div>
        </div>
    </section>
    <!--End hero slider-->
    <section class="popular-categories section-padding">
        <div class="container wow animate__animated animate__fadeIn">
            <div class="section-title">
                <div class="title">
                    <h3>Featured Categories</h3>
                    <ul class="list-inline nav nav-tabs links">
                        <li class="list-inline-item nav-item"><a class="nav-link" href="shop-grid-right.html">Cake & Milk</a></li>
                        <li class="list-inline-item nav-item"><a class="nav-link" href="shop-grid-right.html">Coffes & Teas</a></li>
                        <li class="list-inline-item nav-item"><a class="nav-link active" href="shop-grid-right.html">Pet Foods</a></li>
                        <li class="list-inline-item nav-item"><a class="nav-link" href="shop-grid-right.html">Vegetables</a></li>
                    </ul>
                </div>
                <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
            </div>
            <div class="carausel-10-columns-cover position-relative">
                <div class="carausel-10-columns" id="carausel-10-columns">
                    <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="FE/assets/imgs/shop/cat-13.png" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Cake & Milk</a></h6>
                        <span>26 items</span>
                    </div>
                    <div class="card-2 bg-10 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-12.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Oganic Kiwi</a></h6>
                        <span>28 items</span>
                    </div>
                    <div class="card-2 bg-11 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-11.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Peach</a></h6>
                        <span>14 items</span>
                    </div>
                    <div class="card-2 bg-12 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-9.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Red Apple</a></h6>
                        <span>54 items</span>
                    </div>
                    <div class="card-2 bg-13 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-3.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Snack</a></h6>
                        <span>56 items</span>
                    </div>
                    <div class="card-2 bg-14 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-1.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Vegetables</a></h6>
                        <span>72 items</span>
                    </div>
                    <div class="card-2 bg-15 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-2.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Strawberry</a></h6>
                        <span>36 items</span>
                    </div>
                    <div class="card-2 bg-12 wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-4.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Black plum</a></h6>
                        <span>123 items</span>
                    </div>
                    <div class="card-2 bg-10 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-5.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Custard apple</a></h6>
                        <span>34 items</span>
                    </div>
                    <div class="card-2 bg-12 wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-14.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Coffe & Tea</a></h6>
                        <span>89 items</span>
                    </div>
                    <div class="card-2 bg-11 wow animate__animated animate__fadeInUp" data-wow-delay="0s">
                        <figure class="img-hover-scale overflow-hidden">
                            <a href="shop-grid-right.html"><img src="{{ asset('FE/assets/imgs/shop/cat-15.png') }}" alt="" /></a>
                        </figure>
                        <h6><a href="shop-grid-right.html">Headphone</a></h6>
                        <span>87 items</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End category slider-->
    <section class="banners mb-25">
        <div class="container">
    
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <img src="{{ asset('FE/assets/imgs/banner/banner-1.png') }}" alt="" />
                        <div class="banner-text">
                            <h4>
                                Everyday Fresh & <br />Clean with Our<br />
                                Products
                            </h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <img src="{{ asset('FE/assets/imgs/banner/banner-2.png') }}" alt="" />
                        <div class="banner-text">
                            <h4>
                                Make your Breakfast<br />
                                Healthy and Easy
                            </h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <img src="{{ asset('FE/assets/imgs/banner/banner-3.png') }}" alt="" />
                        <div class="banner-text">
                            <h4>The best Organic <br />Products Online</h4>
                            <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End banners-->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Popular Products</h3>
                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Milks & Dairies</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Coffes & Teas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Pet Foods</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Meats</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">Vegetables</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Fruits</button>
                    </li>
                </ul>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        @foreach ($allproducts as $product)
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ route('singleproduct',[$product->id, $product->slug]) }}">
                                            <img class="default-img" src="{{ asset($product->image) }}" alt="" />
                                            <img class="hover-img" src="{{ asset($product->image) }}" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        
                                        <a href="">{{ $product->product_category_name }}</a>
                                        
                                    </div>
                                    <h2><a href="{{ route('singleproduct',[$product->id, $product->slug]) }}">{{ $product->product_name }}</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>{{ $product->affter_price }}</span>
                                            <span class="old-price">{{ $product->first_price }}</span>
                                        </div>

                                        <form action="{{ route('addproducttocart') }}" method="POST">
                                            @csrf
                                        <div class="add-cart">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" >
                                            <input type="hidden" name="affter_price" value="{{ $product->affter_price }}" >
                                            <input type="hidden" name="quantity" value="1" >
                                            
                                            <button type="submit" class="add"><i class="fi-rs-shopping-cart mr-5"></i>Add</button>
                                            
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <!--end product card-->
                    </div>
                    
                </div>
            </div>
            <!--End tab-content-->
            <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{ asset($product->image) }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-1.jpg') }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-3.jpg') }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-4.jpg') }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-5.jpg') }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-6.jpg') }}" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('FE/assets/imgs/shop/product-16-7.jpg') }}" alt="product image" />
                                            </figure>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails">
                                            <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                            <div><img src="FE/assets/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info pr-30 pl-30">
                                        <span class="stock-status out-stock"> Sale Off </span>
                                        <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">{{ $product->product_name }}</a></h3>
                                        <div class="product-detail-rating">
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <span class="current-price text-brand">{{ $product->affter_price }}</span>
                                                <span>
                                                    <span class="save-price font-md color3 ml-15">26% Off</span>
                                                    <span class="old-price font-md ml-15">{{ $product->first_price }}</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="detail-extralink mb-30">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                                <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                            <div class="product-extra-link2">
                                                <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                        <div class="font-xs">
                                            <ul>
                                                <li class="mb-5">Category: <span class="text-brand">{{ $product->product_category_name }}</span></li>
                                                <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Products Tabs-->

@endsection