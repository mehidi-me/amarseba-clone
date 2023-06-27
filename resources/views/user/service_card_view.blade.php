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
                        <div class="p-0 page_speed_573780225">



                            <div class="row pt-4">

                                @foreach ($shebas as $key => $sheba)
                                    <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-12 pt-3">
                                        <div class="card overflow-hidden border-0">
                                            <div data-bs-toggle="modal" data-bs-target="#img_modal_{{$sheba->id}}"
                                                class="card_img_box cursor-pointer page_speed_175668012"
                                                style="background-image:url({{ asset('admin/images/sheba_image/' . $sheba->sheba_image) }})">
                                            </div>
                                            <div class="card-body p-2 py-3">
                                                <h4>{{ $sheba->sheba_name }}</h4>
                                                <p class="text-muted">{{ $sheba->category->category_name }}</p>
                                            </div>
                                            <div class="page_speed_1065025972" style="    display: grid;
                                            grid-template-columns: 50% auto;">
                                                <button class="btn btn-success rounded-0" data-bs-toggle="modal"
                                                    data-bs-target="#img_modal_{{$sheba->id}}">ছবি দেখুন</button>
                                                <button class="btn btn-danger rounded-0"
                                                    onclick="download_file_action('{{ url('dashboard/done/'.$sheba->id)}}',' {{ $sheba->sheba_price }}')">ডাউনলোড
                                                    করুন</button>
                                            </div>


                                            <div class="fade modal" id="img_modal_{{$sheba->id}}">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <img src="{{ asset('admin/images/sheba_image/' . $sheba->sheba_image) }}"
                                                        class="w-100 page_speed_1329228410">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    {{-- <div class="col-md-4 col-lg-3 col-xl-3 col-sm-6 col-12 pt-3">
<div class="card overflow-hidden border-0">

    <img src="{{asset('admin/images/sheba_image/'.$sheba->sheba_image)}}" alt="Sheba Image" height="100px" width="100px">
    <div class="card-body p-2 py-3">
        <h4>{{ $sheba->sheba_name }}</h4>
        <p class="text-muted">{{ $sheba->category->category_name }}</p>
    </div>
    <div class="page_speed_961568209">
        <button class="btn btn-success rounded-0" data-bs-toggle="modal" data-bs-target="#img_modal_1{{ $key }}">ছবি দেখুন</button>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#service_modal_0{{ $key }}" >
            ডাউনলোড করুন
         </a>


     </div>


    <div class="fade modal" id="img_modal_1{{ $key }}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <img src="{{asset('admin/images/sheba_image/'.$sheba->sheba_image)}}" class="w-100 page_speed_997096972"  >
     </div>
    </div>

    <div class="modal fade" id="service_modal_0{{ $key }}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">

                <button type="button" class="btn-close close-icon" data-bs-dismiss="modal" aria-label="btn-close"></button>

                <div class="modal-body text-center py-4">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <form action="{{ url('dashboard/done')}}" method="post">
                                @csrf
                            <h1 class="text-success pb-2"><b>{{ $sheba->sheba_price }}</b></h1>
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

</div>
</div> --}}
                                @endforeach

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-5">
                                        <nav class="d-flex justify-items-center justify-content-between">
                                            <div class="d-flex justify-content-between flex-fill d-sm-none">



                                            </div>

                                            <div
                                                class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">


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
