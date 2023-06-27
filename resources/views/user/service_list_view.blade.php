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

            <a data-bs-toggle="modal" data-bs-target="#service_modal_0{{ $key }}" >
                <i class="bx bx-download"></i>
             </a>




          </td>
        </tr>

        <div class="modal fade" id="service_modal_0{{ $key }}">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content position-relative">

                    <button type="button" class="btn-close close-icon" data-bs-dismiss="modal" aria-label="btn-close"></button>

                    <div class="modal-body text-center py-4">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form action="{{ url('dashboard/done')}}" method="post">
                                    @csrf

                                 <input type="hidden"  name="sheba_id" value=" {{ $sheba->id }}">
                                 <input type="hidden"  name="sheba_price" value=" {{ $sheba->sheba_price }}">
                                 <h2>ফাইলটি ডাউনলোড করলে আপনার একাউন্ট থেকে {{ $sheba->sheba_price }}  টাকা কর্তন করা হবে। আপনি কি ডাউনলোড করবেন? </h2>
                                <Button type="submit" class="btn btn-primary">Dawnload</Button>
                            </form>
                                <a  href="{{ url('dashboard/service') }}" class="btn btn-info">No</a>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

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
