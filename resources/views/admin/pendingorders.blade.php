@extends('admin.layouts.ad_base')
@section('page_title')
Pending Orders
@endsection
@section('admin_content')

<section class="content-main">
  <div class="content-header">
    <div>
      <h2 class="content-title card-title">Order List</h2>
      <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div>
      <input
        type="text"
        placeholder="Search order ID"
        class="form-control bg-white"
      />
    </div>
  </div>
  <div class="card mb-4">
    <header class="card-header">
      <div class="row gx-3">
        <div class="col-lg-4 col-md-6 me-auto">
          <input
            type="text"
            placeholder="Search..."
            class="form-control"
          />
        </div>
        <div class="col-lg-2 col-6 col-md-3">
          <select class="form-select">
            <option>Status</option>
            <option>Active</option>
            <option>Disabled</option>
            <option>Show all</option>
          </select>
        </div>
        <div class="col-lg-2 col-6 col-md-3">
          <select class="form-select">
            <option>Show 20</option>
            <option>Show 30</option>
            <option>Show 40</option>
          </select>
        </div>
      </div>
    </header>
    <!-- card-header end// -->
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">User ID</th>
              <th scope="col">Shipping Info</th>
              <th scope="col">Product ID</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col" class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pending_orders as $order)
            <tr>
              <td>#{{ $order->product_id }}</td>
              <td>
                <ul>
                  <li>Phone: {{ $order->shipping_phoneNumber }}</li>
                  <li>City: {{ $order->shipping_city }}</li>
                  <li>Post Code: {{ $order->shipping_postCode }}</li>
                </ul>
              </td>
              <td>{{ $order->product_id }}</td>
              <td>{{ $order->quantity }}</td>
              <td>{{ $order->total_price }}</td>
              <td class="text-end">
                <a href="#" class="btn btn-md rounded font-sm">Approve Now</a>
                      <div class="dropdown">
                          <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm">
                              <i class="material-icons md-more_horiz"></i>
                          </a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">View detail</a>
                              <a class="dropdown-item" href="#">Edit info</a>
                              <a class="dropdown-item text-danger" href="#">Delete</a
                    >
                  </div>
                </div>
                <!-- dropdown //end -->
              </td>
            </tr>
            @endforeach            
          </tbody>
        </table>
      </div>
      <!-- table-responsive //end -->
    </div>
    <!-- card-body end// -->
  </div>
  <!-- card end// -->
  <div class="pagination-area mt-15 mb-50">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-start">
        <li class="page-item active">
          <a class="page-link" href="#">01</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">02</a></li>
              <li class="page-item"><a class="page-link" href="#">03</a></li>
              <li class="page-item">
                  <a class="page-link dot" href="#">...</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">16</a></li>
              <li class="page-item">
                  <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i
          ></a>
              </li>
          </ul>
          </nav>
          </div>
          </section>
<!-- content-main end// -->
<footer class="main-footer font-xs">
  <div class="row pb-30 pt-15">
    <div class="col-sm-6">
      <script>
        document.write(new Date().getFullYear());
      </script>
      &copy; Copilofy - HTML Ecommerce Template .
    </div>
    <div class="col-sm-6">
      <div class="text-sm-end">All rights reserved</div>
    </div>
  </div>
</footer>


    @endsection