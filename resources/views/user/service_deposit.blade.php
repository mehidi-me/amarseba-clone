@extends('user.user')

@section('user_content')
<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">রিচার্জ/ জমা</h4>

</div>
</div>
    </div>
</div>
</div>
<!-- end page title -->
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
<div class="card-body">
<div class="header-title mt-1 mb-5">
<div class="d-sm-flex justify-content-between">
<div>
    <h4 class="">রিচার্জ/ জমা</h4>
</div>
<div>
                        <a href="{{ url('dashboard') }}" class="btn btn-success btn-rounded waves-effect waves-light">
        <i class="mdi mdi-reply"></i> পেছনে যান
    </a>
                    </div>
</div>
</div>
<div class="p-0 page_speed_1082166801">
<div class="row">
<div class="pb-2">
                    {{-- <a href="#" class="btn btn-success primary-btn-bg rounded-0 mt-1" data-bs-toggle="modal" data-bs-target="#howToRecerge"><b><i class="mdi mdi-cached"></i> কিভাবে রিচার্জ করবেন?</b></a> --}}
                            <a onclick="$('#addAmount').modal('show')" class="btn btn-success primary-btn-bg rounded-0 mt-1"><b><i class="mdi mdi-plus"></i> রিচার্জ করুন</b></a>
                        {{-- <a href="" class="btn btn-success primary-btn-bg rounded-0 mt-1"><b><i class="mdi mdi-plus"></i> রিচার্জ করুন (অনলাইন পেমেন্ট)</b></a>
                                    <a href="" class="btn btn-success primary-btn-bg rounded-0 mt-1"><b><i class="mdi mdi-minus"></i> ফান্ড ট্রান্সফার</b></a> --}}
            </div>
        <div class="table-responsive">
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive">
<thead>
        <tr>
            <th>ক্রমিক নং</th>
            <th>লেনদেনের বিবরণ</th>
            <th>মাধ্যম</th>
            <th>ট্রানজেকশন আইডি</th>
            <th>টাকার পরিমান</th>
            <th>তারিখ</th>
            <th>লেনদেনের অবস্থা</th>
            {{-- <th class="noExport">একশন</th> --}}
        </tr>
    </thead>
    <tbody>
       @foreach ($recahrges as $recahrge )


        <tr>
            <td> {{$loop->iteration}}</td>
            <td>একাউন্ট রিচার্জ</td>
            <td>{{ $recahrge->type }}</td>
            <td>{{ $recahrge->trnsaction }}</td>
            <td>{{ $recahrge->amount_bonus }}</td>
            <td>{{ $recahrge->created_at }}</td>
            <td>

                @if($recahrge->status == 0)
                   <h6>অপেক্ষমান রয়েছে</h6>
                  @elseif($recahrge->status == 1)
                  <h6>বাতিল হয়েছে</h6>


                   @else
                   <h6>সম্পন্ন  হয়েছে</h6>
                   @endif



            </td>

        </tr>
        @endforeach


        {{-- <tr>
            <td colspan="9">
                <p class="text-muted text-center">কোনো তথ্য খুজে পাওয়া যায়নি..!</p>
            </td>
        </tr> --}}
     </tbody>
</table>







<div class="mt-5">

</div>


</div>
</div>
</div>

</div>
</div>



<div class="modal fade" id="howToRecerge" tabindex="-1" aria-labelledby="howToRecergeLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content rounded-0">
<button type="button" data-bs-dismiss="modal" class="btn btn-light page_speed_452661004">Close</button>

<img src="https://amarseba.net/storage/setting/guNGY5XmQC5qAOmT94zl7NFu9A92YSYcsxooNSXB.png" class="w-100">
</div>
</div>
</div>
        </div>
    </div>
</div>
@endsection
