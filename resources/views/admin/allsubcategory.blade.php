@extends('admin.layouts.ad_base')
@section('page_title')
All SubCategory
@endsection
@section('admin_content')

<section class="content-main">
  <div class="content-header">
    <div>
      <h2 class="content-title card-title">Sub Categories</h2>
      <p>Add, edit or delete a Subcategory</p>
    </div>
    <div>
      <input
        type="text"
        placeholder="Search Categories"
        class="form-control bg-white"
      />
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form action="{{ route('storesubcategory') }}" method="POST">
            @csrf
            <div class="mb-4">
              <label for="subcategory_name" class="form-label">Name</label>
              <input
                type="text"
                placeholder="Type here"
                class="form-control"
                id="subcategory_name"
                name="subcategory_name"
              />
            </div>
            
            <div class="mb-4">
              <label class="form-label">Category</label>
              <select class="form-select" id="category_id" name="category_id">
                <option value="">Select</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach                
              </select>
            </div>
            
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Create Sub Category</button>
            </div>
          </form>
        </div>
        <div class="col-md-9">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                      />
                    </div>
                  </th>
                  <th>ID</th>
                  <th>Sub Name</th>
                  <th>Category</th>
                  <th>Product</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($allsubcategory as $subcategory )
                <tr>
                  <td class="text-center">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                      />
                    </div>
                  </td>
                  
                  <td>{{ $subcategory->category_id }}</td>
                  <td>{{ $subcategory->subcategory_name }}</td>
                  <td>{{ $subcategory->category_name }}</td>
                  <td>{{ $subcategory->product_count }}</td>               
                  
                  
                  <td class="text-end">
                    <div class="dropdown">
                      <a
                        href="#"
                        data-bs-toggle="dropdown"
                        class="btn btn-light rounded btn-sm font-sm"
                      >
                        <i class="material-icons md-more_horiz"></i>
                      </a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">View detail</a>
                          <a class="dropdown-item" href="{{ route('editsubcategory', $subcategory->id) }}">Edit info</a>
                          <a class="dropdown-item text-danger" href="{{ route('deletesubcategory', $subcategory->id) }}">Delete</a
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
        </div>
        <!-- .col// -->
      </div>
      <!-- .row // -->
    </div>
    <!-- card body .// -->
  </div>
  <!-- card .// -->
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