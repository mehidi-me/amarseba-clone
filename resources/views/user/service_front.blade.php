@extends('user.user')

@section('user_content')
    <style>
        /* breadcrumb */

        .breadcrumb-arrow {
            min-height: 35px;
            /*     padding: 0; */
            line-height: 34px;
            list-style: none;
            overflow: auto;
            /*    background-color: #e6e9ed*/
            /*background: linear-gradient(to right, #eaeaea 0%,#ffffff 100%);*/
        }

        .breadcrumb-arrow li:first-child span {
            /* border-radius: 4px 0 0 4px;
                    -webkit-border-radius: 4px 0 0 4px;
                    -moz-border-radius: 4px 0 0 4px; */
            min-width: 50px;
        }

        .breadcrumb-arrow li,
        .breadcrumb-arrow li span,
        .breadcrumb-arrow li a {
            display: inline-block;
            /*vertical-align: top;*/
        }

        .breadcrumb-arrow li:not(:first-child) {
            /* margin-left: -5px; */
        }

        .breadcrumb-arrow li+li:before {
            padding: 0;
            content: "";
        }

        .breadcrumb-arrow li a {
            padding: 0 10px;
        }

        .breadcrumb-arrow li a,
        .breadcrumb-arrow li:not(:first-child) span {
            height: 36px;
            padding: 0 10px 0 25px;
            line-height: 35px;
        }

        /* .breadcrumb-arrow li:first-child a {
                    padding: 0 10px;
                } */

        .breadcrumb-arrow li span {
            position: relative;
            color: #000;
            text-decoration: none;
            background-color: #343a4026;
            border: 1px solid #343a4026;
        }

        .breadcrumb-arrow li span:after,
        .breadcrumb-arrow li span:before {
            position: absolute;
            top: -1px;
            width: 0;
            height: 0;
            content: '';
            border-top: 18px solid transparent;
            border-bottom: 18px solid transparent;
        }

        .breadcrumb-arrow li span:before {
            right: -10px;
            z-index: 3;
            border-left-color: #343a4026;
            border-left-style: solid;
            border-left-width: 10px;
        }

        .breadcrumb-arrow li span:after {
            right: -11px;
            z-index: 2;
            border-left: 11px solid #fff;
        }

        .breadcrumb-arrow li span:active {
            background-color: #343a4026;
            border: 1px solid #343a4026;
        }

        .breadcrumb-arrow li span:active:after,
        .breadcrumb-arrow li span:active:before {
            border-left-color: #343a4026;
        }

        /*set for Last child*/

        .breadcrumb-arrow li.active a {
            position: relative;
            color: #fff;
            text-decoration: none;
            background-color: #05a34a;
            border: 1px solid #05a34a;
        }

        .breadcrumb-arrow li.active:first-child a {
            padding-left: 10px;
        }

        .breadcrumb-arrow li.active a:after,
        .breadcrumb-arrow li.active a:before {
            position: absolute;
            top: -1px;
            width: 0;
            height: 0;
            content: '';
            border-top: 18px solid transparent;
            border-bottom: 18px solid transparent;
        }

        .breadcrumb-arrow li.active a:before {
            right: -10px;
            z-index: 3;
            border-left-color: #05a34a;
            border-left-style: solid;
            border-left-width: 11px;
        }

        .breadcrumb-arrow li.active a:after {
            right: -11px;
            z-index: 2;
            border-left: 10px solid #05a34a;
        }
    </style>



    <!-- end header -->
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
                <div class="w-100 col-12">
                    <div class="d-sm-flex justify-content-end">
                        <div>

                            <a href="{{ url('dashboard/service') }}"
                                class="btn btn-success btn-rounded waves-effect waves-light">
                                <i class="mdi mdi-reply"></i> পেছনে যান
                            </a>
                        </div>
                    </div>


                    <div class="py-4 pb-2">
                        <a href="{{ url('dashboard/service/detail/'.$id.'?cat=bangla') }}"
                            class="btn btn-lg btn-success px-4 rounded-0">বাংলা</a>
                            <a href="{{ url('dashboard/service/detail/'.$id.'?cat=english') }}"
                            class="btn btn-lg btn-success px-4 rounded-0">ENGLISH</a>
                            <a href="{{ url('dashboard/service/detail/'.$id.'?cat=arabic') }}"
                            class="btn btn-lg btn-success px-4 rounded-0">ARABIC</a>
                    </div>

                    <div class="page_speed_479712846">
                        <div class="perfect-scrollbar-example page_speed_2139861008">
                           
                            @foreach($shebas as  $key => $sheba)
                            <div class="border mb-2">
                                <img src="{{ asset('admin/images/sheba_image/' . $sheba->sheba_image) }}"
                                    class="w-100 h-auto rounded-0">
                                <ol class="breadcrumb breadcrumb-arrow m-0">
                                    <li class="text-center"><span>{{$key + 1}}</span></li>
                                    <li class=""><span>Font Name: {{$sheba->sheba_name}}</span></li>
                                    <li class=""><span>Version: {{$sheba->shabe_version}}</span></li>
                                    <li class="page_speed_1238037779"><span>Language: {{$category_name}} Font</span></li>
                                    <li class="active"
                                    onclick="download_file_action('{{ url('dashboard/done/'.$sheba->id)}}',' {{ $sheba->sheba_price }}')">
                                        <a href="#">ডাউনলোড করুন</a></li>
                                </ol>
                            </div>
                            @endforeach
                        </div>

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
@endsection
