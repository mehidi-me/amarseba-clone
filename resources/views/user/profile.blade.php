@extends('user.user')

@section('user_content')
<div class="page-content">

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
<div class="card-body container">
<div class="header-title mt-1 mb-5">
<div class="d-sm-flex justify-content-between">
<div>
    <h4>
        প্রোফাইল
    </h4>
</div>
<div class="">


     <a href="http://localhost:8000/"
        class="btn btn-success btn-rounded waves-effect waves-light">
        <i class="mdi mdi-reply"></i> পেছনে যান
    </a>
                    </div>
</div>
</div>
<div class="p-0 page_speed_1305956576">
<div class="row page_speed_1972480697">


<div class="col-sm-12">
<div class="card-content">
    <div class="row gutters-sm">

                         <div class="col-md-12 pb-3">
                    {{-- <div class="text-end">
                        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            আপনার একাউন্টটি উদ্যোক্তা একাউন্টে রুপান্তর করতে চাইলে এখানে ক্লিক করুন
                        </button>
                    </div> --}}
                    {{-- <div class="collapse mt-2" id="collapseExample">
                        <div class="card card-body">
                            <div class="alert alert-danger" role="alert">উদ্যোক্তা একাউন্টে রুপান্তর হতে চাইলে আপনার একাউন্ট থেকে ১৯ টাকা কর্তন করা হবে। সাথে অবশ্যই আপনার প্রতিষ্ঠানের ট্রেড লাইসেন্স এর স্কেন কপি লাগবে।</div>
                            <form action="https://amarseba.net/admin/user/profile/entrepreneur-nid-check" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k">                                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group pt-1 pb-1">
                                            <label for="nid_no" class="font-black">NID নাম্বার</label>
                                            <input type="number" class="form-control" name="nid_no" id="nid_no" placeholder="NID নাম্বার লিখুন" value="" required>
                                                                                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group pt-1 pb-1">
                                            <label for="birth" class="font-black">জন্ম তারিখ</label>
                                            <input type="date" class="form-control" name="birth" id="birth" placeholder="দোকান বা সেন্টারের নাম লিখুন" value="" required>
                                                                                                    </div>
                                    </div>

                                    <div class="col-md-12 pt-2">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-success btn-lg btn-round">সাবমিট করুন</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>


        <div class="col-md-4 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{asset('admin/images/user/'.Auth::user()->image)}}" height="200px" width="200px" alt="User Logo" class="rounded-circle border-success page_speed_1290887022">
    <div class="mt-3">
                            <h4>  {{ Auth::user()->username }}</h4>
                            <p class="text-secondary mb-1">পাবলিক</p>
                            <p class="text-muted font-size-sm"></p>

                                <a href="{{ url('user/edit/profile') }}"
                                    class="btn btn-success btn-round">
                                    <i class="zmdi zmdi-edit"></i> প্রোফাইল আপডেট
                                </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3 shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="mdi mdi-facebook text-primary"></i> ফেসবুক</h6>
                        <small class="text-secondary"><b> {{ Auth::user()->facebook }}</b></small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="mdi mdi-twitter text-info"></i> টুইটার</h6>
                        <small class="text-secondary"><b>{{ Auth::user()->twitter }}</b></small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="mdi mdi-whatsapp text-success"></i> হোয়াটসঅ্যাপ</h6>
                        <small class="text-secondary"><b>{{ Auth::user()->facebook }}</b></small>
                    </li>
                </ul>
            </div>

                <div class="card mt-3 shadow">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0">
                        <h6 class="mb-0">মোট রিচার্জ</h6>
                        <small class="text-secondary"><b>{{ Auth::user()->balance }} টাকা</b></small>
                    </li>
                    {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">মোট কমিশন</h6>
                        <small class="text-secondary"><b>+০ টাকা</b></small>
                    </li> --}}
                    {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-0">
                        <h6 class="mb-0">মোট জমা</h6>
                        <small class="text-secondary"><b>= ০ টাকা</b></small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">মোট ব্যয়</h6>
                        <small class="text-secondary"><b>-০ টাকা</b></small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">বর্তমান ব্যালেন্স</h6>
                        <small class="text-secondary"><b>০ টাকা</b></small> --}}
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card mb-3 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">নাম</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">আইডি</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->username }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">ফোন</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->number }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">ঠিকানা</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->address }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">জন্ম তারিখ</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">   {{ Auth::user()->dob }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">NID নাম্বার</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"> {{ Auth::user()->nid }}</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">দোকান বা সেন্টারের নাম</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">{{ Auth::user()->centername }}</div>
                    </div>
                    <hr>




                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">একাউন্ট তৈরি করা হয়েছে</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->created_at }}
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>

</div>
</div>
        </div>
    </div>
</div>
@endsection
