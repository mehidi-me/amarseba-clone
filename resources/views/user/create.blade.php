@extends('user.user')

@section('user_content')

<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">নতুন রিচার্জ</h4>

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
<div class="header-title mt-1 mb-5">
<div class="d-sm-flex justify-content-between">
<div>
    <h4>
        নতুন রিচার্জ
    </h4>
</div>
<div class="">

                        <a href="{{ url('dashboard/deposit') }}"
        class="btn btn-success btn-rounded waves-effect waves-light">
        <i class="mdi mdi-reply"></i> পেছনে যান
    </a>
                    </div>
</div>
</div>
<div class="p-0 page_speed_1973596375">
<div class="row">
<div class="col-sm-12">
<form enctype="multipart/form-data"
    action="{{ url('dashboard/deposit/store') }}"
    method="POST" class=" needs-validation" novalidate>
@csrf

    <div class=" row">
        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="amount_total" class="font-black">টাকার পরিমান</label>
                <input type="number" class="form-control" name="amount_total" id="amount_total"
                    placeholder="টাকার পরিমান লিখুন (In English)" value="" required>
                                            </div>
        </div>
                                <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="amount_bonus" class="font-black">টাকার পরিমান (বোনাস সহ)</label>
                <input type="number" class="form-control" name="amount_bonus" id="amount_bonus"
                    placeholder="টাকার পরিমান (বোনাস সহ)"   required>
                                            </div>
        </div>
                                <div class="col-md-6 pt-1 pb-1">
            <div class="form-group">
                <label for="image" class="font-black">ডিপোজিট স্লিপ</label>
                <input type="file" class="form-control" name="image" id="image"
                     placeholder="ডিপোজিট স্লিপ আপলোড করুন" required>
                <img id="deposit_slip_image"
                    src="" width="120px"
                    class="mt-1">
                                            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group pt-1 pb-1">
                <label for="trnsaction" class="font-black">Transaction ID</label>
                <input type="text" class="form-control" name="trnsaction" id="trnsaction"
                    placeholder="Transaction ID লিখুন" value="" required>
                                            </div>
        </div>

        <div class="col-md-12 ">
            <div class="form-group py-2 text-center">
                <button type="submit" class="btn btn-success btn-round">সাবমিট করুন</button>
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
