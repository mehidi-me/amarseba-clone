<!doctype html>
<html lang="bn">

<head>
    <link rel="dns-prefetch" href="//amarseba.net">
    <link rel="dns-prefetch" href="//schema.org","@type":"WebPage","name":"Amar">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//unpkg.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//ui-avatars.com">

    <meta name="csrf-token" content="v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ড্যাশবোর্ড - Amar Seba</title>
    <meta name="description" content="ড্যাশবোর্ড">
    <meta name="keywords" content="Amar, sheba, amrsheba, internet, services">
    <link rel="canonical" href="https://amarseba.net/admin/dashboard" />
    <meta name="robots" content="all">
    <meta property="og:title" content="ড্যাশবোর্ড" />
    <meta property="og:description" content="ড্যাশবোর্ড" />
    <meta property="og:url" content="https://amarseba.net/admin/dashboard" />
    <meta property="og:type" content="services" />
    <meta name="twitter:title" content="ড্যাশবোর্ড" />
    <meta name="twitter:description" content="ড্যাশবোর্ড" />
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"WebPage","name":"Amar Seba","description":"Amar Seba provides All kinds of internet Services in One Place. We are here to serve you.","url":"https://amarseba.net/admin/dashboard"}</script>

    <!-- App favicon -->
    <link rel="icon" href="{{ asset('admin-assets/storage/setting/3mtgvOc19DqRI6QPeUdon1jeIIH08FeqTqRVbvzC.png') }}"
        type="image/png">

    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->

    <link rel="stylesheet" href="{{ asset('admin-assets/fonts/SolaimanLipi/font.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin-assets/vendors/MaterialDesign/css/materialdesignicons.min.css') }}admin-assets/vendors/MaterialDesign/css/materialdesignicons.min.css">
    <link href="{{ asset('nanopkg-assets/vendor/bootstrap-icons/css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <!-- endinject -->


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!-- sweetalert2 Css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/sweet-alert2/sweetalert2.min.css') }}">

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/demo1/style.css') }}">
    <!-- End layout styles -->

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/arrow-hidden.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
    <!-- End custom styles -->



    <!-- toastr Css -->
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/toastr/toastr.min.css') }}">
    <style>
        .page_speed_1272985859 {
            border: 0px;
            border-left: 3px solid;
        }

        .page_speed_97375595 {
            font-size: 70px;
        }

        .page_speed_1213613792 {
            border-radius: 0px;
            min-width: 120px;
        }

        .page_speed_1662210314 {
            font-size: 1rem;
            color: white;
        }

        .page_speed_1211187764 {
            display: none
        }


        input[type="radio"][id^="cb"] {
            display: none;
        }

        .paymentselctlabel {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
        }

        .paymentselctlabel:before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        .paymentselctlabel img {
            height: 60px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        .paymentselctlabel p {
            margin: 0;
        }

        :checked+.paymentselctlabel {
            border-color: #ddd;
        }

        :checked+.paymentselctlabel:before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
        }

        :checked+.paymentselctlabel img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
        }
    </style>
</head>


<!-- Google tag (gtag.js) -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-0WRKGQVH76"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0WRKGQVH76');
</script> --}}



<body>
    <span id="bKash_button"></span>
    <div class="loader_overlay">
        <div class="loader"></div>
    </div>
    <div id="vue-app">
        <!-- Begin page -->
        <div class="main-wrapper">
            <!-- vue page -->
            <!-- start header -->
            <nav class="sidebar">
                <div class="sidebar-header">
                    <a href="#" class="sidebar-brand">
                        আমার<span> সেবা</span>
                    </a>
                    <div class="sidebar-toggler not-active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="sidebar-body">
                    <ul class="nav">
                        <li class="text-capitalize  nav-item nav-category ">
                            ড্যাশবোর্ড
                        </li>
                        <li class="text-capitalize active nav-item ">
                            <a class="active text-capitalize waves-effect nav-link" href="{{ url('dashboard') }}">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="link-title">ড্যাশবোর্ড</span>
                            </a>
                        </li>


                        {{-- <li
    class="text-capitalize  nav-item nav-category ">
        ইউজার ম্যানেজমেন্ট
    </li>

                                    <li
    class="text-capitalize  nav-item ">
        <a class=" text-capitalize waves-effect nav-link"
        href="https://amarseba.net/admin/user/entrepreneur">
        <i class="link-icon" data-feather="user-check"></i>
                <span class="link-title">উদ্যোক্তা</span>
    </a>
    </li>
                                    <li
    class="text-capitalize  nav-item ">
        <a class=" text-capitalize waves-effect nav-link"
        href="{{ url('dashboard/user/center') }}">
        <i class="link-icon" data-feather="users"></i>
                <span class="link-title">সেন্টার</span>
    </a>
    </li> --}}





                        <li class="text-capitalize  nav-item nav-category ">
                            সেবা ম্যানেজমেন্ট
                        </li>

                        <li class="text-capitalize  nav-item ">
                            <a class=" text-capitalize waves-effect nav-link" href="{{ url('dashboard/service') }}">
                                <i class='bx bx-archive'></i>
                                <span class="link-title">সেবা সমূহ</span>
                            </a>
                        </li>
                        <li class="text-capitalize  nav-item ">
                            <a class=" text-capitalize waves-effect nav-link"
                                href="{{ url('dashboard/service-history') }}">
                                <i class="bx bx-history"></i>
                                <span class="link-title">সেবার ইতিহাস</span>
                            </a>
                        </li>



                        <li class="text-capitalize  nav-item nav-category ">
                            সেবার হিসাব
                        </li>

                        <li class="text-capitalize  nav-item ">
                            <a class=" text-capitalize waves-effect nav-link" href="{{ url('dashboard/deposit') }}">
                                <i class="mdi mdi-cash-multiple"></i>
                                <span class="link-title">রিচার্জ/ জমা</span>
                            </a>
                        </li>
                        {{-- <li
    class="text-capitalize  nav-item ">
        <a class=" text-capitalize waves-effect nav-link"
        href="https://amarseba.net/admin/expense">
        <i class="mdi mdi-cash-multiple"></i>
                <span class="link-title">
                                        ব্যয় সমূহ
                                    </span>
    </a>
    </li> --}}







                    </ul>
                </div>
            </nav>
            <!-- end header -->
            <div class="page-wrapper">
                <!-- start header -->
                <nav class="navbar">
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="navbar-content">


                        <ul class="navbar-nav">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="wd-30 ht-30 rounded-circle"
                                        src="@if(!empty(Auth::user()->image)) {{ asset('admin/images/user/' . Auth::user()->image) }} @else {{ asset('frontend/images/user.jpeg') }} @endif" height="50px"
                                        width="50px">
                                </a>
                                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                        <div class="mb-3">
                                            <img class="wd-80 ht-80 rounded-circle"
                                                src="@if(!empty(Auth::user()->image)) {{ asset('admin/images/user/' . Auth::user()->image) }} @else {{ asset('frontend/images/user.jpeg') }} @endif"
                                                height="50px" width="50px">
                                        </div>
                                        <div class="text-center">
                                            <p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
                                            <p class="tx-12 text-muted">{{ Auth::user()->username }}</p>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled p-1">
                                        <li class="dropdown-item py-2">
                                            <a href="{{ url('user/profile') }}" class="text-body ms-0">
                                                <i class="me-2 icon-md" data-feather="user"></i>
                                                <span>প্রোফাইল</span>
                                            </a>
                                        </li>



                                        <li class="dropdown-item py-2">
                                            <a href="{{ url('user/logout') }}" " class="text-body ms-0">
                                <i class="me-2 mdi mdi-logout"></i>
                                <span>লগআউট</span>
                            </a>
                        </li>
                    </ul>


                </div>
            </li>
        </ul>
    </div>
</nav>
                @yield('user_content')




             

                <footer
    class="footer d-flex flex-column flex-md-row align-items-center justify-content-center px-4 py-3 border-top small">
    <p class="text-muted mb-1 mb-md-0">কপিরাইট © 2023 <a href="#" target="_blank">আমার সেবা</a>.

    </p>

</footer>
            </div>

        </div>
        <!--end  vue page -->
        <div class="modal fade" id="logout_modal" tabindex="-1" aria-labelledby="logout_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center pb-4">
                    <i class="mdi mdi-logout text-success page_speed_97375595"></i>
                    <h3>আপনি কি লগআউট করতে চান ? </h3>
                </div>

                <div class="text-center">
                    <button type="button"  data-bs-dismiss="modal"class="btn btn-secondary btn-lg page_speed_1213613792">না</button>
                    <form method="POST" action="https://amarseba.net/logout" class="d-inline">
    <input type="hidden" name="_token" value="v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k">    <button type="submit"  class="btn btn-danger btn-lg text-light page_speed_1213613792">
    <span class="page_speed_1662210314">হ্যাঁ</span>
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="internet_conn"></div>
    </div>



    <div id="addAmount" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <form id="addAmountSubmit" method="post">
                    @csrf
                    <div class="row"
                        style="    justify-content: center;
                    align-items: center;
                    gap: 15px;">
                        <div class="pt-3" style="width: 300px;">
                            <label for="amount" id="uddokpayAmountL">সর্বনিম্ন রিচার্জ</label>
                            <input type="number" required class="form-control" id="uddokpayAmount"
                                name="amount" placeholder="Enter Amount" value="">
                        </div>
                        <div
                            style="    display: flex;
                        justify-content: center;
                        align-items: center;">
                            <div>
                                <input type="radio" name="paymentselctname" id="cb1" checked />
                                <label class="paymentselctlabel" for="cb1"><img
                                        src="{{ asset('admin-assets/images/bkash_payment_logo.png') }}" />
                                    <p>Bkash online payment</p>
                                </label>
                            </div>
                            <div>
                                <input type="radio" name="paymentselctname" id="cb2" />
                                <label class="paymentselctlabel" for="cb2"><img
                                        src="{{ asset('admin-assets/images/manualpaymentimg.jpg') }}" />
                                    <p>Manual payment</p>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" id="userId" name="userId" value="">
                    </div>

                    <div class="modal-footer justify-content-center">



                        {{-- <input id="pdfid" name="pdfid" value="" type="hidden"> --}}
                        <button type="submit" id="amountSubmitButton" class="btn"
                            style="background-color: #032559;color:#fff">সাবমিট</button>

                    </div>
                </form>
            </div>
        </div>
</div>

<div class="modal fade" id="loadingModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-
labelledby="loadingModal" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header"></div>
    <div class="modal-body">
      <div class="d-flex justify-content-center">
        <div class="spinner-border" style="color: red;
width: 4rem;
height: 4rem;
border-width: 0.3rem;" role="status">
          <span class="visually-hidden"></span>
        </div>
      </div>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>

<button style="display: none;" id="closeLoadingModal" data-dismiss="modal"></button>
</div>

<button style="display: none;" id="showLoadingModal" data-toggle="modal" data-target="#loadingModal"></button>







    <!-- END layout-wrapper -->
        <!-- start scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false">
</script><script data-turbo-eval="false" data-turbolinks-eval="false">
    window.livewire = new Livewire();
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k';
    window.deferLoadingAlpine = function(callback) {
        window.addEventListener('livewire:load', function() {
            callback();
        });
    };
    let started = false;
    window.addEventListener('alpine:initializing', function() {
        if (!started) {
            window.livewire.start();
            started = true;
        }
    });
    document.addEventListener("DOMContentLoaded", function() {
        if (!started) {
            window.livewire.start();
            started = true;
        }
    });
</script>
<!-- core:js -->
<script src="{{ asset('admin-assets/vendors/core/core.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('admin-assets/vendors/feather-icons/feather.min.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->

<script src="{{ asset('admin-assets/vendors/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{ asset('admin-assets/vendors/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/template.js') }}"></script>
<script src="{{ asset('admin-assets/js/img-src.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/own/arrow-hidden.js') }}"></script>
<script src="{{ asset('admin-assets/js/own/show-hide-pass.js') }}"></script>
<script src="{{ asset('admin-assets/js/own/internet_conn.js') }}"></script>
<script src="{{ asset('admin-assets/js/own/select2-search-focus.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
    integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- end scripts -->

    <script src="{{ asset('admin-assets/js/tosterSession.min.js') }}"></script>

    <form action="" method="POST" id="delete-form" class="page_speed_1211187764">
    <input type="hidden" name="_token" value="v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k">    <input type="hidden" name="_method" value="Delete"></form>

<script src="{{ asset('admin-assets/js/delete.min.js') }}"></script>

    <form action="" method="POST" id="delete-form" class="page_speed_1211187764">
    <input type="hidden" name="_token" value="v17YUXIvLVfYzxpEkoCAYoCiDIZhAQk1Q11C5f3k">    <input type="hidden" name="_method" value="POST"></form>

<script src="{{ asset('admin-assets/js/download_file.js') }}"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

<script>
    const requird_amount = 1;
    const quickpaymentlist = [100,200,300,400,500];


    $('#uddokpayAmount').val(requird_amount)
    $('#uddokpayAmountL').text('সর্বনিম্ন রিচার্জ ' + requird_amount + 'Tk');

    async function payWithUddokta() {

        // Prevent the default form submission event from happening.


        const values = {
            full_name: "{{ auth()->user()->name }}",
            email: "test@gmail.com",
            amount: Number($('#uddokpayAmount').val()),
            metadata: {
                id: "{{ auth()->user()->id }}"
            },
            redirect_url: "https://{{ Config::get('app.payment_domain2') }}/payment/success.php?link=" +
                location.hostname,
            cancel_url: "https://{{ Config::get('app.payment_domain2') }}/payment/cancel.php?link=" + location
                .hostname,
            webhook_url: "https://{{ Config::get('app.payment_domain2') }}/payment/webhook.php?link=" +
                location.hostname

        }

        $("#amountSubmitButton").html(`<div class="spinner-border" role="status">
        <span class="sr-only"></span>
        </div>`);

        var res = await fetch(`https://pay.{{ Config::get('app.payment_domain') }}/api/checkout-v2`, {
            method: 'POST',
            body: JSON.stringify(values),
            headers: {

                'RT-UDDOKTAPAY-API-KEY': "{{ Config::get('app.payment_token') }}",
                'Content-Type': 'application/json'
            }
        });

        var data = await res.json();


        $("#amountSubmitButton").html(`সাবমিট`);


        if (data.status == true) {
            window.location.href = data.payment_url;

        } else {
            swal("Something is wrong try again!")
        }
        console.log(data)

    }


    async function payWithBkash() {

        $(function() {
            // Change script url when it's live
            var scriptLink = 'https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js';

            $("#amountSubmitButton").html(`<div class="spinner-border" role="status">
            <span class="sr-only"></span>
            </div>`);

            function errorMessage(response) {
                let msg = '';
                if (!response.errorMessageEn) {
                    msg += 'Payment failed';
                } else {
                    let errorMessage = 'Sorry, your payment was unsuccessful !!! ';
                    let errorCode = response.externalCode;
                    let bkashErrorCode = [2001, 2002, 2003, 2004, 2007, 2008, 2009, 2011, 2012, 2013, 2020,
                        2021, 2022, 2025, 2027, 2028, 2030, 2031, 2032, 2033, 2036, 2037, 2038, 2040,
                        2041, 2042,
                        2043, 2044, 2045, 2046, 2047, 2048, 2049, 2050, 2051, 2052, 2053, 2054, 2055,
                        2056
                    ];

                    if (bkashErrorCode.includes(errorCode)) {
                        errorMessage = 'Payment failed';
                    } else if (errorCode == 2029) {
                        errorMessage =
                            'Sorry, your payment was unsuccessful !!! For same amount transaction, please try again after 10 minutes.';
                    }

                    msg += errorMessage;
                }
                return msg;
            }

            $.getScript(scriptLink)
                .done(function(script) {
                    //finished loading the script

                    var paymentID = null;
                    var bkashPaymentRequest = {
                        intent: "sale",
                        basePath: "abdul-khalek-mobile-recharge-s",
                        urlFragment: "paymentlink",
                        trxType: "AMOUNT",
                        amount: Number($('#uddokpayAmount').val()),
                        price: Number($('#uddokpayAmount').val()),
                        userId: "{{ auth()->user()->id }}",
                        packageName: "Customer Provided Amount",
                        quantity: 0,
                        customerName: "",
                        customerPhoneNumber: "",
                        customerEmail: "",
                        customerReference: "",
                        customerAddress: "",
                        customerMembershipId: "",
                        customerBillMonth: "",
                        useWalletAsContact: true
                    };

                    //call the bkash init function
                    bKash.init({
                        paymentMode: 'checkout',
                        paymentRequest: bkashPaymentRequest,
                        createRequest: function(request) {
                            // write your logic
                            $.ajax({
                                url: "https://cpp.bka.sh/customer-portal-middleware/create-payment",
                                type: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                data: JSON.stringify(request),
                                success: function(response) {
                                    $("#amountSubmitButton").html(`সাবমিট`)
                                    data = response;
                                    if (data && data.paymentID != null) {
                                        paymentID = data.transactionId;
                                        bKash.create().onSuccess(data);
                                    } else {
                                        bKash.create().onError();
                                        swal("Invalid Payment Id",
                                            "Sorry, your payment was unsuccessful !!!",
                                            "warning");

                                    }
                                },
                                error: function(xhr, textStatus, errorThrown) {
                                    $("#amountSubmitButton").html(`সাবমিট`);
                                    bKash.create().onError();
                                    swal("Invalid Request",
                                        "Sorry, your payment was unsuccessful !!!",
                                        "error");

                                }
                            });

                        },
                        executeRequestOnAuthorization: function() {
                            $.ajax({
                                url: "https://cpp.bka.sh/customer-portal-middleware/execute-payment",
                                type: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                data: JSON.stringify({
                                    transactionId: paymentID
                                }),
                                success: async function(response) {
                                    $("#amountSubmitButton").html(`সাবমিট`)
                                    data = response;
                                    if (data && data.paymentId != null) {
                                        await fetch(
                                            "{{ route('bkash.execute.payment') }}", {
                                                headers: {
                                                    "Content-Type": "application/json",
                                                    "X-CSRF-Token": "{{ csrf_token() }}"
                                                },
                                                method: "post",
                                                body: JSON.stringify({
                                                    amount: bkashPaymentRequest
                                                        .amount,
                                                })
                                            });
                                        paymentID = null;
                                        swal("Payment successful",
                                            "Payment successfully completed",
                                            "success");

                                        location.reload();
                                    } else {
                                        bKash.execute().onError();
                                        swal(data.errorMessageEn, errorMessage(
                                            data), "error");

                                    }
                                },
                                error: function(xhr) {
                                    $("#amountSubmitButton").html(`সাবমিট`);
                                    data = xhr.responseJSON;
                                    bKash.execute().onError();
                                    swal(data.errorMessageEn, errorMessage(
                                        data), "error");
                                }
                            });

                        },
                        onClose: function() {
                            $("#amountSubmitButton").html(`সাবমিট`);
                            swal("Please try again", "Sorry, your payment was unsuccessful",
                                "warning")

                        }
                    });

                    $('#bKash_button').click();

                });
            // window.location.replace(window.location.href);
        });
    }

    async function onSubmit(event) {
        event.preventDefault();


        if ($('#uddokpayAmount').val() < requird_amount) {

            swal('সর্বনিম্ন রিচার্জ ' + requird_amount + 'Tk')

        } else {
            if (event.target.paymentselctname[0].checked) {
                payWithBkash()
            } else {
                payWithUddokta()
            }
        }


    }



    $('#addAmountSubmit').on('submit', onSubmit);


    // async function testfunctpayme() {
    //     await fetch(
    //                                         "{{ route('bkash.execute.payment') }}", {
    //                                             headers: {
    //                                                 "Content-Type": "application/json",
    //                                                 "X-CSRF-Token": "{{ csrf_token() }}"
    //                                             },
    //                                             method: "post",
    //                                             body: JSON.stringify({
    //                                                 amount: 145,
    //                                             })
    //                                         });
    // }
    // testfunctpayme();
</script>


</body>

</html>
