@extends('admin.layouts.ad_base')
@section('page_title')
Edit SubCategory
@endsection
@section('admin_content')

<section class="content-main">
  <div class="content-header">
    <div>
      <h2 class="content-title card-title">Edit Sub Categories</h2>
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
          <form action="{{ route('updatesubcategory') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $subcategoryinfo->id }}" name="subcatid" id="">
            <div class="mb-4">
              <label for="subcategory_name" class="form-label">Name</label>
              <input
                type="text"
                placeholder="Type here"
                class="form-control"
                id="subcategory_name"
                name="subcategory_name"
                value="{{ $subcategoryinfo->subcategory_name }}"
              />
            </div>          
                        
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Update Sub Category</button>
            </div>
          </form>
        </div>
        
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