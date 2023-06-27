@extends('user.user')

@section('user_content')
<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">প্রোফাইল আপডেট</h4>




প্রোফাইল তথ্য আপডেট করুন
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
            <div class="card">
<div class="card-body container">
<div class="p-0 page_speed_59757184">
<div class="row page_speed_1042574897">
<div class="col-sm-12">
<form enctype="multipart/form-data"
    action="{{ url('profile/update') }}"
    method="POST">
   @csrf
    <div class=" row">

        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="name" class="font-black">নাম</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="আপনার নাম লিখুন"
                    value="{{ Auth::user()->name }}" required >
             </div>
        </div>

        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="name" class="font-black">আইডি </label>
                <input type="text" class="form-control" name="username" id="username" placeholder="আপনার আইডি নাম লিখুন"
                    value="{{ Auth::user()->username }}" required >
             </div>
        </div>
        <div class="col-md-6">
            <div class="form-group py-1">
                <label for="number" class="font-black">ফোন নাম্বার</label>
                <input type="number" class="form-control" name="number" id="number" maxlength="11" minlength="11" placeholder="আপনার ফোন নাম্বার লিখুন (In English)" value="{{ Auth::user()->number }}" required>
         </div>
        </div>

        <div class="col-md-6">
            <div class="form-group py-1">
                <label for="dob" class="font-black">ঠিকানা</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="আপনার ঠিকানা লিখুন" value="{{ Auth::user()->address }}" required>
         </div>
        </div>

        <div class="col-md-6">
            <div class="form-group py-1">
                <label for="dob" class="font-black">জন্ম তারিখ</label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="আপনার জন্ম তারিখ লিখুন" value="{{ Auth::user()->dob }}" required>
         </div>
        </div>






        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="nid" class="font-black">NID নাম্বার</label>
                <input type="text" class="form-control" name="nid" id="nid" placeholder="আপনার NID নাম্বার লিখুন"
                    value="{{ Auth::user()->nid }}" required>
             </div>
        </div>

        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="centername" class="font-black">দোকান বা সেন্টারের নাম</label>
                <input type="text" class="form-control" name="centername" id="centername" placeholder="দোকান বা সেন্টারের নাম লিখুন"
                    value="{{ Auth::user()->centername }}" required>
             </div>
        </div>

        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="centername" class="font-black">Image</label>
                <input type="file" class="form-control" name="image" id="centername" placeholder="দোকান বা সেন্টারের নাম লিখুন"
                     >
                     <img src="{{asset('admin/images/user/'.Auth::user()->image)}}" alt="user logo" height="200px" width="200px">
             </div>
        </div>




        <div class="col-12 pt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group pt-1 pb-1">
                        <label for="facebook" class="font-black">ফেসবুক আইডি লিংক</label>
                        <input type="url" class="form-control" name="facebook" id="facebook" placeholder="{{ Auth::user()->facebook }}"
                            value="" required>
                 </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pt-1 pb-1">
                        <label for="twitter" class="font-black">টুইটার আইডি লিংক</label>
                        <input type="url" class="form-control" name="twitter" id="twitter" placeholder="{{ Auth::user()->twitter }}"
                            value="" required>
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pt-1 pb-1">
                        <label for="whatsapp" class="font-black">WhatsApp নাম্বার</label>
                        <input type="text" class="form-control" name="whasapp" id="whasapp"
                            value="{{ Auth::user()->whasapp }}" required>
                         </div>
                </div>
            </div>
        </div>




        <div class="col-md-12 ">
            <div class="form-group py-1">
                <button type="submit" class="btn btn-primary btn-round">আপডেট করুন</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>

</div>
</div>
        </div>
    </div>
</div>

@endsection
