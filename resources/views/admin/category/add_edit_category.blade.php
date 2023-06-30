@extends('admin.layouts.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Category Management</h3>
                        <h4 class="font-weight-normal mb-0">Categories </h4>
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $title }}</h4>
                  	@if(Session::has('error_message'))
		               <div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Error!</strong>{{Session::get('error_message')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  	<span aria-hidden="true">&times;</span>
						  </button>
				       </div>
	             	@endif

	             	@if(Session::has('success_message'))
		               <div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Success!</strong>{{Session::get('success_message')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  	<span aria-hidden="true">&times;</span>
						  </button>
				       </div>
	             	@endif

	             	 @if ($errors->any())
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                       @endforeach
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                   @endif

                  <form class="forms-sample" @if(empty($category['id'])) action="{{url('admin/add-edit-category')}}" @else action="{{ url('admin/add-edit-category/'.$category['id']) }}" @endif method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                      <label for="category_name">Category Name</label>
                      <input type="text" class="form-control" id="category_name" placeholder="Enter  Category Name" name="category_name" @if(!empty($category['category_name'])) value="{{$category['category_name']}}" @else value="{{ old('category_name') }}" @endif>
                    </div>


                      <div class="form-group">
                        <label for="category_image">Category Image</label>
                        <input type="file" class="form-control" id="category_image" name="category_image">
                        @if(!empty($category['category_image']))
                          <a target="_blank" href="{{url('admin/images/category_image/'.$category['category_image'])}}">View Image</a>&nbsp;|&nbsp;
                          <a href="javascript:void(0)" class="confirmDelete" module="category-image" moduleid="{{ $category['id'] }}">Delete Image</a>
                        @endif
                    </div>




                    <div class="form-group">
                      <label for="meta_keywords"> Category Style</label>
                      <select name="category_style" class="form-control" id="category_style">
                        <option value="1">Card View</option>
                        <option value="2">List View</option>
                        <option value="4">Font View</option>
                        <option value="3">News View</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <label for="meta_keywords"> Category Price</label>
                        <input type="text" name="price" placeholder=" Category Price" class="form-control" id="price" @if(!empty($category['price'])) value="{{$category['price']}}" @else value="{{ old('price') }}" @endif>
                      </div>
                    <div class="form-group">
                        <label for="meta_keywords"> Category Link</label>
                        <input type="text" name="full_link" placeholder="Category Link" class="form-control" id="full_link" @if(!empty($category['full_link'])) value="{{$category['full_link']}}" @else value="{{ old('full_link') }}" @endif>
                      </div>
                    <div class="form-group">
                        <label for="meta_keywords"> Category Desc</label>
                        <input type="text" name="desc" class="form-control" id="desc" @if(!empty($category['desc'])) value="{{$category['desc']}}" @else value="{{ old('desc') }}" @endif>
                      </div>

                      

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layouts.footer')
    <!-- partial -->
</div>
@endsection
