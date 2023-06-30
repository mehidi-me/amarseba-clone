@extends('admin.layouts.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Sheba Management</h3>
                        <h4 class="font-weight-normal mb-0">Sheba </h4>
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

                  <form class="forms-sample" @if(empty($sheba['id'])) action="{{url('admin/add-edit-sheba')}}" @else action="{{ url('admin/add-edit-sheba/'.$sheba['id']) }}" @endif method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                      <label for="sheba_name">Sheba Name</label>
                      <input type="text" class="form-control" id="sheba_name" placeholder="Enter Sheba  Name" name="sheba_name" @if(!empty($sheba['sheba_name'])) value="{{$sheba['sheba_name']}}" @else value="{{ old('sheba_name') }}" @endif>
                    </div>

                      <div class="form-group">
                        <label for="shabe_version">Sheba Version</label>
                        <input type="text" class="form-control" id="shabe_version" placeholder="Enter Sheba Version " name="shabe_version" @if(!empty($sheba['shabe_version'])) value="{{$sheba['shabe_version']}}" @else value="{{ old('shabe_version') }}" @endif>
                      </div>

                      <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" class="form-control text-dark">
                          <option value="">Select</option>
                          @foreach($categories as $category)
                           <option value="{{ $category['id'] }}" @if(!empty($sheba['category_id']==$category['id'])) selected="" @endif>{{ $category['category_name'] }}</option>
                          @endforeach
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="sheba_price">Sheba Price</label>
                        <input type="text" class="form-control" id="sheba_price" placeholder="Enter Sheba Price" name="sheba_price" @if(!empty($sheba['sheba_price'])) value="{{$sheba['sheba_price']}}" @else value="{{ old('sheba_price') }}" @endif>
                      </div>



                      <div class="form-group">
                        <label for="sheba_image">Sheba  Image</label>
                        <input type="file" class="form-control" id="sheba_image" name="sheba_image">
                        @if(!empty($sheba['sheba_image']))
                          <a target="_blank" href="{{url('admin/images/sheba_image/'.$sheba['sheba_image'])}}">View Image</a>&nbsp;|&nbsp;
                          <a href="javascript:void(0)" class="confirmDelete" module="sheba-image" moduleid="{{ $sheba['id'] }}">Delete Image</a>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="sheba_image">Sheba  File</label>
                        <input type="file" class="form-control" id="file" name="file">
                        @if(!empty($sheba['file']))
                          <a target="_blank" href="{{url('admin/pdf/sheba_file/'.$sheba['file'])}}">Download File</a>&nbsp;|&nbsp;
                          {{-- <a href="javascript:void(0)" class="confirmDelete" module="sheba-image" moduleid="{{ $sheba['id'] }}">Delete File</a> --}}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="sheba_file_link">Sheba  File Link</label>
                        <input type="text" class="form-control" placeholder="Sheba  File Link" id="sheba_file_link" name="sheba_file_link" @if(!empty($sheba['sheba_file_link'])) value="{{$sheba['sheba_file_link']}}" @else value="{{ old('sheba_file_link') }}" @endif>
                      
                    </div>

                    <div class="form-group">
                        <label for="cat_name">Cat Name</label>
                        <select  class="form-control" value="null" name="cat_name" >
                          <option value="null" disabled @if(!empty($sheba['cat_name']== 'null')) selected="" @endif>Select Category</option>
                        <option value="bangla" @if(!empty($sheba['cat_name']== 'bangla')) selected="" @endif>Bangla</option>
                        <option value="english" @if(!empty($sheba['cat_name']== 'english')) selected="" @endif>English</option>
                        <option value="arabic" @if(!empty($sheba['cat_name']== 'arabic')) selected="" @endif>Arabic</option>
                        </select>
                        
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
