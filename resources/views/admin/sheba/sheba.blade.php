@extends('admin.layouts.layout')
@section('content')
	<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sheba</h4>
                        <!-- <p class="card-description">
                            All  <code>.table-bordered</code>
                        </p> -->
                            <a style="max-width: 150px; float: right; display: inline-block;" href="{{ url('admin/add-edit-sheba') }}" class="btn btn-block btn-primary">Add Sheba</a>
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
                                        <th>Sheba Name</th>
                                        <th>Sheba Version</th>
                                        <th>Sheba Price</th>
                                        <th>Sheba Image</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($shebas as $sheba)

                                    <tr>
                                        <td>{{ $sheba['id'] }}</td>
                                        {{-- <td>{{ $sheba['category_id'] }}</td> --}}
                                        <td>{{ $sheba['category']['category_name'] }}</td>
                                        <td>{{ $sheba['sheba_name'] }}</td>
                                        <td>{{ $sheba['shabe_version'] }}</td>
                                        <td>{{ $sheba['sheba_price'] }}</td>

                                        <td>
                                            <img style="width:100px; height: 100px;" src="{{asset('admin/images/sheba_image/'.$sheba['sheba_image'])}}" alt="Sheba Image">
                                        </td>


                                        <td>
                                            <a href="{{ url('admin/add-edit-sheba/'.$sheba['id']) }}"><i style="font-size:30px;" class="mdi mdi-pencil-box"></i></a>

                                            <a href="javascript:void(0)" class="confirmDelete" module="sheba" moduleid="{{ $sheba['id'] }}"><i style="font-size:30px;" class="mdi mdi-file-excel-box"></i></a>
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
