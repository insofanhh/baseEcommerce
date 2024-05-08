@extends('users.layouts.template')
@section('content')
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                
                <span></span> Shipping Address
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Shipping Address</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row">
                    <h4 class="mb-30">Billing Details</h4>
                    <form action="{{ route('addshippingaddress') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="text" name="city" required="" placeholder="Address *">
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="postcode" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="" type="text" name="phone" placeholder="Phone *">
                            </div>
                        </div>
                       
                        <div class="form-group mb-30">
                            <textarea rows="5" name="note" placeholder="Additional information"></textarea>
                        </div>

                    
                        <button type="submit" class="btn btn-fill-out btn-block mt-30">Place an Order</button>
                    </form>
                </div>
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
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection