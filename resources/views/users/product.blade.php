@extends('users.layouts.template')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> <a href="shop-grid-right.html">Vegetables & tubers</a> <span></span> Seeds of Change Organic
            </div>
        </div>
    </div>
    <div class="container mb-30">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <div class="product-detail accordion-detail">
                    <div class="row mb-50 mt-30">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset($product->image) }}" alt="product image" />
                                    </figure>
                                
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                    <div><img src="{{ asset($product->image) }}" alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h2 class="title-detail">{{ $product->product_name }}</h2>
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
                                <div class="short-desc mb-30">
                                    <p class="font-lg">{{ $product->description }}</p>
                                </div>
                                <div class="attr-detail attr-size mb-30">
                                    <strong class="mr-10">Size / Weight: </strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">50g</a></li>
                                        <li class="active"><a href="#">60g</a></li>
                                        <li><a href="#">80g</a></li>
                                        <li><a href="#">100g</a></li>
                                        <li><a href="#">150g</a></li>
                                    </ul>
                                </div>

                                <form action="{{ route('addproducttocart') }}" method="POST">
                                    @csrf
                                <div class="detail-extralink mb-50">                                    
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="" name="quantity" class="qty-val" value="1">
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">                                        
                                        <input type="hidden" name="product_id" value="{{ $product->id }}" >
                                        <input type="hidden" name="affter_price" value="{{ $product->affter_price }}" >
                                        
                                            <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>                                    
                                </div>
                                </form>
                                <div class="font-xs">
                                    <ul class="mr-50 float-start">
                                        <li class="mb-5">Type: <span class="text-brand">{{ $product->product_category_name }}</span></li>
                                        <li class="mb-5">Quantity: <span class="text-brand">{{ $product->quantity }}</span></li>
                                        <li>LIFE: <span class="text-brand">70 days</span></li>
                                    </ul>
                                    <ul class="float-start">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a href="#" rel="tag">Organic</a>, <a href="#" rel="tag">Brown</a></li>
                                        <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                   
                    <div class="row mt-60">
                        <div class="col-12">
                            <h2 class="section-title style-1 mb-30">Related products</h2>
                        </div>
                        <div class="col-12">
                            <div class="row related-products">
                                @foreach ($related_products as $product)
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap hover-up">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="shop-product-right.html" tabindex="0">
                                                    <img class="default-img" src="{{ asset($product->image) }}" alt="" />
                                                    <img class="hover-img" src="{{ asset($product->image) }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                                <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <h2><a href="shop-product-right.html" tabindex="0">{{ $product->product_name }}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span> </span>
                                            </div>
                                            <div class="product-price">
                                                <span>{{ $product->affter_price }} </span>
                                                <span class="old-price">{{ $product->first_price }}</span>
                                            </div>
                                        </div>
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
</main>
@endsection