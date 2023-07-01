@extends('user.user')

@section('user_content')
<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">ড্যাশবোর্ড</h4>
                        <ol class="breadcrumb m-0">
        <li class="breadcrumb-item active">
ড্যাশবোর্ড
</li>
    </ol>
</div>
</div>
    </div>
</div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-md-12 stretch-card">
            <section id="front-managment" class="w-100">
                @php
                $sheba=App\Models\Category::all();
                @endphp
<div class="row">
            <div class="col-md-6 col-lg-3 col-sm-6 grid-margin stretch-card">
    <div class="card position-relative border-primary page_speed_1272985859">
<a href=""">



        <div class="card-body">
            <a href="{{ url('dashboard/service') }}" >
            <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-2 text-primary"><b>মোট সেবা সংখ্যা</b></h6> 
            </div>
        </a>
            <div class="row">
            <div class="col-12">
                <a href="{{ url('dashboard/service') }}" >  <h3 class="mb-2">{{count($sheba)}} টি</h3> </a>
            </div>
            </div>
        </div>
    </a>
    <i class="bx bx-bookmark-minus card-bg-icon text-secondary"></i>
    </div>
</div>







            {{-- <div class="col-md-6 col-lg-3 col-sm-6 grid-margin stretch-card">
    <div class="card position-relative border-warning page_speed_1272985859">
    <a href="https://amarseba.net/admin/deposit">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-2 text-warning"><b>রিচার্জ/ জমা</b></h6>
            </div>
            <div class="row">
            <div class="col-12">
                <h3 class="mb-2">{{ Auth::user()->balance }} টাকা</h3>
            </div>
            </div>
        </div>
    </a>
    <i class="bx bx-wallet-alt card-bg-icon text-secondary"></i>
    </div>
</div> --}}








 <div class="col-md-6 col-lg-3 col-sm-6 grid-margin stretch-card">
    <div class="card position-relative border-success page_speed_1272985859">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline">
            <a href="{{ url('dashboard/deposit') }}" ><h6 class="card-title mb-2 text-success"><b>বর্তমান ব্যালেন্স</b> <span class="badge bg-primary text-white">রিচার্জ</span></h6></a>
        </div>
        <div class="row">
        <div class="col-12">
            <h3 class="mb-2">{{ Auth::user()->balance }}  টাকা</h3>
        </div>
        </div>
    </div>
    <i class="bx bx-wallet-alt card-bg-icon text-secondary"></i>
    </div>
</div>







    </div>





<div class="row">


</div>


</section>
        </div>
    </div>
</div>
@endsection
