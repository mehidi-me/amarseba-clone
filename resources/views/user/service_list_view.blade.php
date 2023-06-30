@extends('user.user')

@section('user_content')
<div class="page-content">
    <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
<div class="page-title text-capitalize">
                        <h4 class="breadcrumb-title">{{ $categories->category_name }}</h4>

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
    <h4 class="">{{ $categories->category_name }}</h4>
</div>
<div>

                        <a href="{{ url('dashboard/service') }}"
        class="btn btn-success btn-rounded waves-effect waves-light">
        <i class="mdi mdi-reply"></i> পেছনে যান
    </a>
                    </div>
</div>
</div>
<div class="p-0 page_speed_1362096336">
<div class="row">
<div class="table-responsive">
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive">
<thead>
        <tr>
            <th>ক্রমিক নং</th>
            <th>বিষয়</th>
            <th>ভার্সন</th>
            <th class="noExport">একশন</th>
        </tr>
    </thead>
    <tbody>
        @foreach($shebas as  $key => $sheba)
         <tr>
            <td class="text-center">
                {{$loop->iteration}}
            </td>
            <td>
                {{ $sheba->sheba_name }}
            </td>
            <td>
              {{ $sheba->shabe_version }}
            </td>
            <td class="text-center p-2">

            {{-- <a href="{{ url('dashboard/dawnload',$sheba->id) }}">
                <i class="bx bx-download"></i>
            </a> --}}

            <a  onclick="download_file_action('{{ url('dashboard/done/'.$sheba->id)}}',' {{ $sheba->sheba_price }}')" >
                <i class="bx bx-download"></i>
             </a>




          </td>
        </tr>

       
       

        @endforeach


    </tbody>
</table>







<div class="mt-5">
    <nav class="d-flex justify-items-center justify-content-between">
<div class="d-flex justify-content-between flex-fill d-sm-none">
<ul class="pagination">


            </ul>
</div>

<div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">


<div>
<ul class="pagination">

    {!! $shebas->links() !!}
                    </ul>
</div>
</div>
</nav>

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
