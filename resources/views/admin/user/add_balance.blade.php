@extends('admin.layouts.layout')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">User  Balance </h3>
                        <h4 class="font-weight-normal mb-0">User </h4>
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
                  <h4 class="card-title">User  Balance</h4>
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

                  <form class="forms-sample" action="{{ url('admin/balance/add') }}"  method="POST" enctype="multipart/form-data">@csrf


<input type="hidden" name="user_id" value="{{ $user->id }}">
                      <div class="form-group">
                        <label for="amount_total">Amount  </label>
                        <input type="text" class="form-control" id="amount_total"  name="amount_total"  value="{{ old('balance') }}" placeholder="Amount " required>
                      </div>

                     














                    <button type="submit" class="btn btn-primary mr-2">Save</button>

                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">User  Balance </h3>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Balance</h4>
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
                                    <th>ক্রমিক নং</th>
                                    <th>লেনদেনের বিবরণ</th>
                                    <th>মাধ্যম</th>
                                    <th>ট্রানজেকশন আইডি</th>
                                    <th>টাকার পরিমান</th>
                                    <th>তারিখ</th>
                                    <th>লেনদেনের অবস্থা</th>
                                    <th class="noExport">একশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user->recharges as  $key => $recharge)

                                <tr>
                                    <td> {{$loop->iteration}}</td>
                                    <td>একাউন্ট রিচার্জ</td>
                                    <td>{{ $recharge->type }}</td>
                                    <td>{{ $recharge->amount_total }}</td>
                                    <td>{{ $recharge->trnsaction }}</td>
                                    <td>{{ $recharge->created_at }}</td>
                                    <td>

                                        @if($recharge->status == 0)
                                           <h6>অপেক্ষমান রয়েছে</h6>
                                          @elseif($recharge->status == 1)
                                          <h6>বাতিল হয়েছে</h6>


                                           @else
                                           <h6>সম্পন্ন  হয়েছে</h6>
                                           @endif
                                    </td>
                                    <td>

                                     <a href="{{ url('admin/balance/delete/'.$recharge['id'])  }}" class="btn btn-danger">Delete</a>
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
    <!-- partial:partials/_footer.html -->
    @include('admin.layouts.footer')
    <!-- partial -->
</div>
@endsection
