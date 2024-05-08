@extends('users.layouts.template')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                
                <span></span> Checkout
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Checkout</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <h4 class="ml-30 mb-30">Billing Details</h4>
                    <div class="ml-30 table-responsive shopping-summery">
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">
                                    
                                    <th scope="col">City</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">PostCode</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                                              
                                <tr class="pt-30">
                                    
                                    
                                    
                                    <td class="product-des product-name">
                                        <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html">{{ $shippingaddress->city }}</a></h6>
                                        
                                    </td>
                                    <td class="" data-title="">
                                        <h4 class="text-body">{{ $shippingaddress->phone }}</h4>
                                    </td>
                                    
                                    <td class="" data-title="">
                                        <h4 class="text-brand">{{ $shippingaddress->postcode }}</h4>
                                    </td>
                                    
                                </tr>   
                                                        
                            </tbody>
                        </table>
                    </div>
                    {{--  --}}
                </div>
                <form action="{{ route('placeorder') }}" method="POST">
                    @csrf
                    <div class="payment ml-30">
                        <h4 class="mb-30">Payment</h4>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Getway</label>
                            </div>
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="{{ asset('FE/assets/imgs/theme/icons/payment-paypal.svg') }}" alt="">
                            <img class="mr-15" src="{{ asset('FE/assets/imgs/theme/icons/payment-visa.svg') }}" alt="">
                            <img class="mr-15" src="{{ asset('FE/assets/imgs/theme/icons/payment-master.svg') }}" alt="">
                            <img src="{{ asset('FE/assets/imgs/theme/icons/payment-zapper.svg') }}" alt="">
                        </div>                        
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i></button>
                    </div>
                </form>
                <form action="">
                    @csrf
                    <div class="payment ml-30">
                    <button type="submit" class="btn  btn-block mt-30"><i class="fi-rs-sign-in mr-15"></i>Cancel Order</button>
                    </div>
                </form>
                
            </div>
            <div class="col-lg-5">
                <div class="border p-40 cart-totals ml-30 mb-50">
                    <div class="d-flex align-items-end justify-content-between mb-30">
                        <h4>Your Order</h4>
                        <h6 class="text-muted">Subtotal</h6>
                    </div>
                    <div class="divider-2 mb-30"></div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($cart_items as $item)                                   
                                
                                <tr>
                                    @php
                                    $productName = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                    $productImage = App\Models\Product::where('id', $item->product_id)->value('image');
                                @endphp
                                    <td class="image product-thumbnail"><img src="{{ asset($productImage) }}" alt="#"></td>
                                    <td>
                                        <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">{{ $productName }}</a></h6></span>
                                        
                                    </td>
                                    <td>
                                        <h6 class="text-muted pl-20 pr-20">x {{ $item->quantity }}</h6>
                                    </td>
                                    <td>
                                        <h4 class="text-brand">{{ $item->price }}</h4>
                                    </td>
                                </tr>
                                @php
                                $total = $total + $item->price
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <h3 class="text-brand">Total: {{ $total }}</h3>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
</main>

@endsection