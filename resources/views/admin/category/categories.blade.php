@extends('admin.layouts.layout')
@section('content')
	<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Categories</h4>
                        <!-- <p class="card-description">
                            All  <code>.table-bordered</code>
                        </p> -->
                            <a style="max-width: 150px; float: right; display: inline-block;" href="{{ url('admin/add-edit-category') }}" class="btn btn-block btn-primary">Add Category</a>
                            @if(Session::has('success_message'))
                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Success!</strong>{{Session::get('success_message')}}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                               </div>
                            @endif
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered" id="categories">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>Category Style</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)

                                    <tr>
                                        <td>{{ $category['id'] }}</td>
                                        <td>{{ $category['category_name'] }}</td>

                                        <td>
                                            <img style="width:100px; height: 100px;" src="{{asset('admin/images/category_image/'.$category['category_image'])}}" alt="Category Image">
                                        </td>
                                        <td>{{ $category['category_style'] }}</td>
{{-- cat_id --}}
                                        <td>
                                            <a href="{{ url('admin/add-edit-category/'.$category['id']) }}"><i style="font-size:30px;" class="mdi mdi-pencil-box"></i></a>

                                            <a href="javascript:void(0)" class="confirmDelete" module="category" moduleid="{{ $category['id'] }}"><i style="font-size:30px;" class="mdi mdi-file-excel-box"></i></a>
                                            <a href="{{ url('admin/sheba?cat_id='.$category['id']) }}">
                                                <div class="btn btn-primary">View Sheba</div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    @include('admin.layouts.footer')
    <!-- partial -->
</div>


@endsection
