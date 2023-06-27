@extends('admin.layouts.layout')
@section('content')
	<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users</h4>
                        <!-- <p class="card-description">
                            All  <code>.table-bordered</code>
                        </p> -->


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
                                        <th>User  Name</th>
                                        <th>User Uername</th>
                                        <th>User Phone </th>
                                        <th>User Balance </th>
                                        <th>User Image</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)

                                    <tr>
                                        <td>{{ $user['id'] }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['username'] }}</td>
                                        <td>{{ $user['number'] }}</td>
                                        <td>{{ $user['balance'] }}</td>


                                        <td>
                                            <img style="width:100px; height: 100px;" src="{{asset('admin/images/user/'.$user['image'])}}" alt="user Image">
                                        </td>


                                        <td>
                                            <a href="{{ url('admin/add-edit-user/'.$user['id']) }}"><i style="font-size:30px;" class="mdi mdi-pencil-box"></i></a>

                                            <a href="javascript:void(0)" class="confirmDelete" module="user" moduleid="{{ $user['id'] }}"><i style="font-size:30px;" class="mdi mdi-file-excel-box"></i></a>
                                            <a href="{{ url('admin/balance/'.$user['id']) }}" class="btn btn-primary">Add Balance</a>
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
