@extends('user.user')

@section('user_content')

<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">সাপ্তাহিক চাকরির খবর</h4>

</div>
</div>
    </div>
</div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="w-100">
<div class="row">
<div class="col-12 text-end">


                <a href="{{ url('dashboard/service') }}"
    class="btn btn-success btn-rounded waves-effect waves-light">
    <i class="mdi mdi-reply"></i> পেছনে যান
</a>
            </div>
</div>

@foreach($shebas as  $key => $sheba)
<div class="text-center pt-3">
<div>
<h2>{{ $sheba->sheba_name }}</h2>
<img src="{{asset('admin/images/sheba_image/'.$sheba->sheba_image)}}" alt="" class="w-100 shadow mt-2">
</div>


</div>
@endforeach

</div>
        </div>
    </div>
</div>
@endsection
