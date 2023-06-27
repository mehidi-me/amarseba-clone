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
                                        <th>User Amount</th>
                                        <th>User Trnsaction </th>
                                        <th>User Time </th>
                                        <th>User Image</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($balances as $balance)

                                    <tr>
                                        <td>{{ $balance['id'] }}</td>
                                        <td>{{ $balance['user_id'] }}</td>
                                        <td>{{ $balance['amount_total'] }}</td>
                                        <td>{{ $balance['trnsaction'] }}</td>
                                        <td>{{ $balance['created_at'] }}</td>

                                        <td>
                                            <img style="width:100px; height: 100px;" src="{{asset('admin/images/recharge/'.$balance['image'])}}" alt="user Image">
                                        </td>



                                        <td>
                                            <a href="{{ url('admin/add-edit-user/'.$balance['id']) }}" class="btn btn-primary">Accepted</i></a>
                                            <a href="{{ url('admin/add-edit-user/'.$balance['id']) }}" class="btn btn-danger">Cancell</i></a>

                                            {{-- <a href="javascript:void(0)" class="confirmDelete" module="user" moduleid="{{ $balance['id'] }}"><i style="font-size:30px;" class="mdi mdi-file-excel-box"></i></a> --}}
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
