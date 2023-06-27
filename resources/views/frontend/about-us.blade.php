@extends('layouts.app')

@section('content')
     <!-- main Section -->
     <section class="page-section pt-5">
        <div class="row">
            <div class="col-md-12 py-5">
                <div class="container">

    <div class="text-center pb-3">
        <img class="img-fluid rounded" src="{{ asset('admin-assets/images/logo.png') }}" alt="amar seba">
        <h2 class="title pt-5 text-success page_speed_983889770"><b>আমার সেবা</b></h2>
    </div>

     <p class="MsoNormal page_speed_2056718720 page_speed_282935161 page_speed_353898537 page_speed_1359021328 page_speed_1666062649 page_speed_1653154667 page_speed_558486818 page_speed_910804270 page_speed_308381416"><span class="page_speed_886951239" lang="BN">বাংলাদেশ একটি উন্নয়নশীল দেশ। বর্তমান সরকার এই দেশকে ডিজিটাল বাংলাদেশ গড়ার প্রত্যয় নিয়ে এগিয়ে যাচ্ছে। বর্তমান তথ্য ও যোগাযোগ প্রযুক্তি নির্ভর বিশ্বে বাংলাদেশও এগিয়ে যাওয়ার লক্ষ্যে প্রযুক্তিগতভাবে নানান ধরণের প্রকল্প হাতে নিয়েছেন। সাধারণ মানুষের দৈনন্দিন অনেক সেবার প্রয়োজন হয় কিন্তু সব ধরণের সেবা সব জায়গায় সঠিক সময়ে পাওয়া যায়না। আবার দেখা যায় কিছু কিছু স্থানে সেবামূল্য নিচ্ছে নিজেদের ইচ্ছে অনুযায়ী। সাধারণ মানুষ নিয়মিত কিছু সেবা নেয়ার জন্য যে সকল সমস্যার সম্মুখিন হচ্ছে তা আমরা নিজের চোখে দেখে অনুধাবন করে সমাধান দেয়ার জন্য অনেকদিন ধরে চেষ্টা করে যাচ্ছি। এই চেষ্ঠা থেকেই আমাদের এই নতুন স্টার্টআপ এর যাত্রা শুরু। আমাদের স্টার্টআপ এর নাম &lsquo;আমার সেবা&rsquo;</span><span class="page_speed_788779549" lang="HI">। এটি বাস্তবায়নে সহযোগীতা করে যাচ্ছেন বাংলাদেশ কম্পিউটার কাউন্সিল ও বাংলাদেশ সরকারের তথ্য ও যোগাযোগ প্রযুক্তি বিভাগ<span class="page_speed_886951239" lang="BN">।</span>&nbsp;</span><span class="page_speed_886951239" lang="BN">এতে সাধারণ মানুষের সময়</span><span class="page_speed_1634699985">, </span><span class="page_speed_886951239" lang="BN">অর্থ ও যাতায়াত তিনটিই সাশ্রয় হচ্ছে। এই স্টার্টআপটির কারণে সাধারণ মানুষের দৈনন্দিন কাজকে আরও সহজ করে দিচ্ছে। এর মাধ্যমে আমরা আমাদের নিজস্ব ও ৩য় পক্ষের সেবা সরবরাহ করছি। এই স্টার্টআপ এর সেবা সাধারণ মানুষের দৌরগোড়ায় পৌছে দেয়ার জন্য জনবহুল স্থান গুলোতে স্থাপন করা হচ্ছে &ldquo;আমার সেবা সেন্টার&rdquo;</span><span class="page_speed_788779549" lang="HI">। ৮ টি সেবা দিয়ে এর যাত্রা শুরু হলেও এখন আমরা মোট ২৫ টি সেবা দিয়ে যাচ্ছি এই </span><span class="page_speed_886951239" lang="BN">স্টার্টআপ</span> <span class="page_speed_788779549" lang="HI">এর মাধ্যমে।</span></p>

    <div class="pt-3 text-center">
         <a href="{{ asset('frontend/files/ICTD-1.pdf') }}front-assets/" class="btn btn-success btn-lg rounded-0" target="_blank">১ম অনুদান</a>
        <a href="{{ asset('frontend/files/ICTD-2.pdf') }}" class="btn btn-success btn-lg rounded-0" target="_blank">২য় অনুদান</a>
        <a href="{{ asset('frontend/files/ICTD-3.pdf') }}" class="btn btn-success btn-lg rounded-0" target="_blank">৩য় অনুদান</a>
    </div>
    <div class="pt-5 row text-center">
        <div class="col-12 pb-2">
            <h2> আমাদের সহযোগীতা দিয়ে যাচ্ছেন </h2>
        </div>
        <div class="col-md-3 pt-2">
            <a href="http://satkania.chittagong.gov.bd/" target="_blank"><img src="{{ asset('frontend/images/others/1.png') }}" class="page_speed_1034016175"></a>
            <h4 class="pt-2">সাতকানিয়া উপজেলা প্রশাসন</h4>
        </div>
        <div class="col-md-3 pt-2">
            <a href="https://ictd.gov.bd/" target="_blank"><img src="{{ asset('frontend/images/others/2.png') }}" class="page_speed_1034016175"></a>
            <h4 class="pt-2">তথ্য ও যোগাযোগ প্রযুক্তি মন্ত্রনালয়</h4>
        </div>
        <div class="col-md-3 pt-2">
            <a href="https://bcc.gov.bd/" target="_blank"><img src="{{ asset('frontend/images/others/3.png')}}" class="page_speed_1034016175"></a>
            <h4 class="pt-2">বাংলাদেশ কম্পিউটার কাউন্সিল</h4>
        </div>
        <div class="col-md-3 pt-2">
            <a href="http://www.ecs.gov.bd/" target="_blank"><img src="{{ asset('frontend/images/others/4.png')}}" class="page_speed_1034016175"></a>
            <h4 class="pt-2">বাংলাদেশ নির্বাচন কমিশন</h4>
        </div>
    </div>

    <div class="mt-5">
        <img src="{{ asset('frontend/images/payment.png')}}" class="w-100">
    </div>

</div>
            </div>
        </div>
    </section>


@endsection
