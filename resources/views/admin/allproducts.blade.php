@extends('admin.layouts.ad_base')
@section('page_title')
All Products
@endsection
@section('admin_content')

<section class="content-main">
    @if(session()->has('message'))
          <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif
  <div class="content-header">
    
    <div>
      <h2 class="content-title card-title">Products List</h2>
      <p>Lorem ipsum dolor sit amet.</p>
    </div>
    <div>
      <a href="#" class="btn btn-light rounded font-md">Export</a>
                      <a href="#" class="btn btn-light rounded font-md">Import</a>
                      <a href="{{ route('addproduct') }}" class="btn btn-primary btn-sm rounded">Create new</a>
                  </div>
      </div>
      <div class="card mb-4">
        
          <header class="card-header">
            
              <div class="row align-items-center">
                  <div class="col col-check flex-grow-0">
                      <div class="form-check ms-2">
                          <input class="form-check-input" type="checkbox" value="" />
                      </div>
                  </div>
                  <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                      <select class="form-select">
            <option selected>All category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
            
            
          </select>
                  </div>
                  <div class="col-md-2 col-6">
                      <input type="date" value="02.05.2021" class="form-control" />
                  </div>
                  <div class="col-md-2 col-6">
                      <select class="form-select">
            <option selected>Status</option>
            <option>Active</option>
            <option>Disabled</option>
            <option>Show all</option>
          </select>
                  </div>
              </div>
          </header>
          <!-- card-header end// -->
          
          <div class="card-body">
              <article class="itemlist">
                  @foreach ($products as $product)
                      
                  
                  <div class="row align-items-center">
                      <div class="col col-check flex-grow-0">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" />
                          </div>
                      </div>
                      <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                          <a class="itemside" href="#">
                              <div class="left">
                                  <img src="{{ asset($product->image) }}" class="img-sm img-thumbnail" alt="Item" />
                              </div>
                              <div class="info">
                                  <h6 class="mb-0">{{ $product->product_name }}</h6>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-2 col-sm-2 col-4 col-price">
                          <span class="old-price">{{ $product->first_price }}</span><br>
                          <span>{{ $product->affter_price }}</span>
                      </div>
                      <div class="col-lg-2 col-sm-2 col-4 col-status">
                          <span class="badge rounded-pill alert-success">Active</span>
                      </div>
                      <div class="col-lg-1 col-sm-2 col-4 col-date">
                          <span>{{ $product->product_category_name }}</span>
                      </div>
                      <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                          <a href="{{ route('editproduct', $product->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                              <i class="material-icons md-edit"></i> Edit
                          </a>
                          <a href="{{ route('deleteproduct', $product->id) }}" class="btn btn-sm font-sm btn-light rounded">
                              <i class="material-icons md-delete_forever"></i> Delete
                          </a>
                      </div>
                  </div>
                  <!-- row .// -->
                  @endforeach
              </article>
              <!-- itemlist  .// -->
              
          </div>
          <!-- card-body end// -->
      </div>
      <!-- card end// -->
      <div class="pagination-area mt-30 mb-50">
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

    @endsection