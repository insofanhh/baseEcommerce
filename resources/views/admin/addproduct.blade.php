@extends('admin.layouts.ad_base')
@section('page_title')
Add Product
@endsection
@section('admin_content')

<section class="content-main">
  @if ($errors->any())
          <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                  @endforeach
                </ul>
          </div>
    @endif
  <div class="row">
    <div class="col-9">
      <div class="content-header">
        <h2 class="content-title">Add New Product</h2>
        
      </div>
    </div>
    
    
    <div class="col-lg-6">
      <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
        @csrf  
      <div class="card mb-4">
        <div class="card-header">
          <h4>Basic</h4>
        </div>
        <div class="card-body">    
              
            <div class="mb-4">
              <label for="product_name" class="form-label"
                >Product title</label
              >
              <input
                type="text"
                placeholder="Type here"
                class="form-control"
                id="product_name"
                name="product_name"
              />
            </div>
            <div class="mb-4">
              <label for="product_quantity" class="form-label"
                >Quantity</label
              >
              <input
                type="text"
                placeholder="Type here"
                class="form-control"
                id="quantity"
                name="quantity"
              />
            </div>
            <div class="mb-4">
              <label class="form-label">Full description</label>
              <textarea
                placeholder="Type here"
                class="form-control"
                rows="4"
                name="description"
              ></textarea>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="mb-4">
                  <label class="form-label">Regular price</label>
                  <div class="row gx-2">
                    <input
                      placeholder="$"
                      type="text"
                      class="form-control"
                      name="first_price"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-4">
                  <label class="form-label">Promotional price</label>
                  <input
                    placeholder="$"
                    type="text"
                    class="form-control"
                    name="affter_price"
                  />
                </div>
              </div>
              <div class="col-lg-4">
                <label class="form-label">Currency</label>
                <select class="form-select">
                  <option>USD</option>
                  <option>EUR</option>
                  <option>RUBL</option>
                </select>
              </div>
            </div>
            <div>
              <button
                class="btn btn-light rounded font-sm mr-5 text-body hover-up"
              >
                Save to draft
              </button>
              <button type="submit"  class="btn btn-md rounded font-sm hover-up">
                Public
              </button>
            </div>
          
        </div>
      </div>
   {{-- end basic form --}}
    </div>
    <div class="col-lg-3">
      <div class="card mb-4">
        <div class="card-header">
          <h4>Media</h4>
        </div>
        <div class="card-body">
          <div class="input-upload">
            <img src="{{ asset('BE/assets/imgs/theme/upload.svg') }}" alt="" />
            <input class="form-control" type="file" id="image" name="image" />
          </div>
        </div>
      </div>
      <!-- card end// -->
      <div class="card mb-4">
        <div class="card-header">
          <h4>Organization</h4>
        </div>
        <div class="card-body">
          <div class="row gx-2">
            <div class="col-sm-6 mb-3">
              <label class="form-label">Category</label>
              <select class="form-select" id="product_category_id" name="product_category_id">
                <option>Select</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach               
                
              </select>
            </div>
            <div class="col-sm-6 mb-3">
              <label class="form-label">Sub-category</label>
              <select class="form-select" id="product_subcategory_id" name="product_subcategory_id">
                <option>Select</option>
                @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                @endforeach                
                
              </select>
            </div>
            
          </div>
          <!-- row.// -->
        </div>
      </div>
      <!-- card end// -->
    </div>
  </div>
  </form>
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