@extends('user.user')

@section('user_content')
<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">সেবা সমূহ</h4>




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
<div class="card-body">
<div class="header-title mt-1 mb-5">
<div class="d-sm-flex justify-content-between">
<div>
    <h4 class="">সেবা সমূহ</h4>
</div>
<div>

                        <a href="{{ url('dashboard') }}"
        class="btn btn-success btn-rounded waves-effect waves-light">
        <i class="mdi mdi-reply"></i> পেছনে যান
    </a>
                    </div>
</div>
</div>
<div class="p-0 page_speed_1756336344">
<div class="row">
<div class="table-responsive">
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive">
<thead>
        <tr>
            <th>ক্রমিক নং</th>
            <th>আইকন</th>
            <th>সেবার নাম</th>
            <th>সেবার মূল্য</th>
                                        <th>সেবা দাতা</th>
                                    </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
                   <tr class="text-center">
                            <td>
                                {{ $category['id'] }}
                            </td>
                            <td class="p-1">
                                <img src="{{asset('admin/images/category_image/'.$category['category_image'])}}" class="table-image">
                            </td>
                            <td>
                            <a href="{{ url('dashboard/service/detail',$category->id) }}"><b>{{ $category['category_name'] }}</b></a>
                             </td>
                            <td>
                                <span class='badge bg-primary text-white'><b>অনির্ধারিত</b></span>
                            </td>
                                                        <td>
                                আমার সেবা
                               </td>
                                    </tr>

                                    @endforeach
                    </tbody>
             </table>







<div class="mt-5">

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
