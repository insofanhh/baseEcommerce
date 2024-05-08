@extends('admin.layouts.ad_base')
@section('page_title')
Edit Category
@endsection
@section('admin_content')

<section class="content-main">
  <div class="content-header">
    <div>
      <h2 class="content-title card-title">Categories</h2>
      <p>Add, edit or delete a category</p>
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
          <form action="{{ route('updatecategory') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $category_info->id }}" name="category_id" id="">
            <div class="mb-4">
              <label for="category_name" class="form-label">Name</label>
              <input
                type="text"
                placeholder="Type here"
                class="form-control"
                id="category_name"
                name="category_name"
                value="{{ $category_info->category_name }}"
              />
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Update Category</button>
            </div>
          </form>
        </div>

        {{-- <div class="col-md-9">
          @if(session()->has('message'))
          <div class="alert alert-success">{{ session()->get('message') }}</div>
          @endif
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
                  <th>Name</th>
                  <th>Sub Category</th>
                  <th>Slug</th>
                  <th>Product</th>
                  <th class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
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
                                    
                  <td>{{ $category->id }}</td>
                  <td><b>{{ $category->category_name }}</b></td>
                  <td>{{ $category->subcategory_count }}</td>
                  <td>{{ $category->slug }}</td>
                  <td>{{ $category->product_count }}</td>
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
        </div> --}}
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