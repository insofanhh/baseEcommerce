@extends('users.layouts.user_profile_temp')
@section('profilecontent')
<div class="tab-content account dashboard-content pl-50">
    <div class="tab-pane fade active show" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">History</h3>
        </div>
        <div class="card-body contact-from-area">
            <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
            <div class="row">
                <div class="col-lg-8">
                    <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                        <div class="input-style mb-20">
                            <label>Order ID</label>
                            <input name="order-id" placeholder="Found in your order confirmation email" type="text" />
                        </div>
                        <div class="input-style mb-20">
                            <label>Billing email</label>
                            <input name="billing-email" placeholder="Email you used during checkout" type="email" />
                        </div>
                        <button class="submit submit-auto-width" type="submit">Track</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

