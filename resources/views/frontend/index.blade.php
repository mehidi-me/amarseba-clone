@extends('layouts.app')

@section('content')



        <!-- main Section -->
        <section class="page-section pt-5">
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="container">
        <!-- Portfolio Grid Items -->
        <div class="row">





                              @foreach ($categories as $key => $category)


                                            <!-- Portfolio Item 1 -->
                        <div class="col-md-6 col-lg-3 py-2 text-center">
                            <div class="portfolio-item mx-auto text-center" alt="{{ $category['category_name'] }}">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#service_modal_0{{ $key }}">
                                    <img class="img-fluid service-image" src="{{asset('admin/images/category_image/'.$category['category_image'])}}" >
                                    <h4 class="text-center pt-2"><b>{{ $category['category_name'] }}</b></h4>
                                </a>
                            </div>
                        </div>


                        <div class="modal fade" id="service_modal_0{{ $key }}">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content position-relative">

                                    <button type="button" class="btn-close close-icon" data-bs-dismiss="modal" aria-label="btn-close"></button>

                                    <div class="modal-body text-center py-4">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10">
                                                <h1 class="text-success pb-2"><b>{{ $category['category_name'] }}</b></h1>

                                                <div class="text-center mx-auto page_speed_1010194568">
                                                <img src="admin-assets/images/others/divider2.png" class="w-100">
                                                </div>

                                                <!-- Portfolio Modal - Image -->
                                                <img class="mt-4 service-image" src="{{asset('admin/images/category_image/'.$category['category_image'])}}" alt="Service Image">
                                                <!-- Portfolio Modal - Text -->

                                                <div class="pt-3 pb-2">
                                                    <p>{{ $category['desc'] }}।</p>


                                                </div>

                                                <h4 class="page_speed_1789238404 text-info border-secondary p-1"><b>সেবা মূল্যঃ <span class='badge bg-primary text-white'><b>অনির্ধারিত</b></span></b></h4>

                                                <div class="pt-3">
                                                    <a href="{{ url('register') }}" class="btn btn-success">রেজিষ্ট্রেশন করুন</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach










                         {{-- <div class="col-md-6 col-lg-3 py-2 text-center">
                            <div class="portfolio-item mx-auto text-center">
                                <a href="index4658.html?page=2">
                                    <img class="img-fluid service-image" src="front-assets/images/next-icon.png" >
                                    <h4 class="text-center pt-2"><b>আরো দেখুন</b></h4>
                                </a>
                            </div>
                        </div> --}}


                                    </div>

    </div>
                </div>
            </div>
        </section>
        <!-- main Section -->



        @endsection
