@extends('users.layouts.user_profile_temp')
@section('profilecontent')
<div class="tab-content account dashboard-content pl-50">
    <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Your Orders</h3>
            </div>
            @if(session()->has('message'))
          <div class="alert alert-success">{{ session()->get('message') }}</div>
          @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pending_orders as $order)
                            <tr>
                                <td>#{{ $order->product_id }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>Processing</td>
                                <td>{{ $order->total_price }}</td>
                                <td><a href="#" class="btn-small d-block">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection