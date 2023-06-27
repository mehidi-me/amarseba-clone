@extends('user.user')

@section('user_content')

    <!-- end header -->
    <div class="page-content">
        <!-- start page title -->
<div class="page-title-box pb-3">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-12">
    <div class="page-title text-capitalize">
                            <h4 class="breadcrumb-title">সেন্টার</h4>
                            <ol class="breadcrumb m-0">
            <li class="breadcrumb-item ">
<a href="https://amarseba.net/admin/dashboard">
ড্যাশবোর্ড
</a>
</li>

            <li class="breadcrumb-item active">
সেন্টার
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
        <h4 class="">সেন্টার</h4>
    </div>
    <div>

                            <a href="https://amarseba.net"
            class="btn btn-success btn-rounded waves-effect waves-light">
            <i class="mdi mdi-reply"></i> পেছনে যান
        </a>
                        </div>
</div>
</div>
    <div class="p-0 page_speed_1394670627">
<div class="row">
<div class="col-md-12">
    <form action="https://amarseba.net/admin/user/center">
        <div class="row">
            <div class="col-md-3  py-1">
                <select name="division_id" id="division_id" class="js-example-basic-single form-select" data-width="100%" required>
                    <option disabled selected>-- বিভাগ নির্বাচন করুন --</option>
                                                        <option value="8" >
                            ময়মনসিংহ
                        </option>
                                                        <option value="7" >
                            রংপুর
                        </option>
                                                        <option value="6" >
                            ঢাকা
                        </option>
                                                        <option value="5" >
                            সিলেট
                        </option>
                                                        <option value="4" >
                            বরিশাল
                        </option>
                                                        <option value="3" >
                            খুলনা
                        </option>
                                                        <option value="2" >
                            রাজশাহী
                        </option>
                                                        <option value="1" >
                            চট্টগ্রাম
                        </option>
                                                </select>
            </div>
            <div class="col-md-3  py-1">
                <select name="district_id" id="district_id" class="js-example-basic-single form-select" data-width="100%">
                    <option disabled selected>-- জেলা নির্বাচন করুন --</option>
                                                        <option value="64" >
                            নেত্রকোণা
                        </option>
                                                        <option value="63" >
                            জামালপুর
                        </option>
                                                        <option value="62" >
                            ময়মনসিংহ
                        </option>
                                                        <option value="61" >
                            শেরপুর
                        </option>
                                                        <option value="60" >
                            কুড়িগ্রাম
                        </option>
                                                        <option value="59" >
                            রংপুর
                        </option>
                                                        <option value="58" >
                            ঠাকুরগাঁও
                        </option>
                                                        <option value="57" >
                            গাইবান্ধা
                        </option>
                                                        <option value="56" >
                            নীলফামারী
                        </option>
                                                        <option value="55" >
                            লালমনিরহাট
                        </option>
                                                        <option value="54" >
                            দিনাজপুর
                        </option>
                                                        <option value="53" >
                            পঞ্চগড়
                        </option>
                                                        <option value="52" >
                            ফরিদপুর
                        </option>
                                                        <option value="51" >
                            গোপালগঞ্জ
                        </option>
                                                        <option value="50" >
                            মাদারীপুর
                        </option>
                                                        <option value="49" >
                            রাজবাড়ী
                        </option>
                                                        <option value="48" >
                            মুন্সিগঞ্জ
                        </option>
                                                        <option value="47" >
                            ঢাকা
                        </option>
                                                        <option value="46" >
                            মানিকগঞ্জ
                        </option>
                                                        <option value="45" >
                            কিশোরগঞ্জ
                        </option>
                                                        <option value="44" >
                            টাঙ্গাইল
                        </option>
                                                        <option value="43" >
                            নারায়ণগঞ্জ
                        </option>
                                                        <option value="42" >
                            শরীয়তপুর
                        </option>
                                                        <option value="41" >
                            গাজীপুর
                        </option>
                                                        <option value="40" >
                            নরসিংদী
                        </option>
                                                        <option value="39" >
                            সুনামগঞ্জ
                        </option>
                                                        <option value="38" >
                            হবিগঞ্জ
                        </option>
                                                        <option value="37" >
                            মৌলভীবাজার
                        </option>
                                                        <option value="36" >
                            সিলেট
                        </option>
                                                        <option value="35" >
                            বরগুনা
                        </option>
                                                        <option value="34" >
                            ভোলা
                        </option>
                                                        <option value="33" >
                            বরিশাল
                        </option>
                                                        <option value="32" >
                            পিরোজপুর
                        </option>
                                                        <option value="31" >
                            পটুয়াখালী
                        </option>
                                                        <option value="30" >
                            ঝালকাঠি
                        </option>
                                                        <option value="29" >
                            ঝিনাইদহ
                        </option>
                                                        <option value="28" >
                            বাগেরহাট
                        </option>
                                                        <option value="27" >
                            খুলনা
                        </option>
                                                        <option value="26" >
                            মাগুরা
                        </option>
                                                        <option value="25" >
                            কুষ্টিয়া
                        </option>
                                                        <option value="24" >
                            চুয়াডাঙ্গা
                        </option>
                                                        <option value="23" >
                            নড়াইল
                        </option>
                                                        <option value="22" >
                            মেহেরপুর
                        </option>
                                                        <option value="21" >
                            সাতক্ষীরা
                        </option>
                                                        <option value="20" >
                            যশোর
                        </option>
                                                        <option value="19" >
                            নওগাঁ
                        </option>
                                                        <option value="18" >
                            চাঁপাইনবাবগঞ্জ
                        </option>
                                                        <option value="17" >
                            জয়পুরহাট
                        </option>
                                                        <option value="16" >
                            নাটোর
                        </option>
                                                        <option value="15" >
                            রাজশাহী
                        </option>
                                                        <option value="14" >
                            বগুড়া
                        </option>
                                                        <option value="13" >
                            পাবনা
                        </option>
                                                        <option value="12" >
                            সিরাজগঞ্জ
                        </option>
                                                        <option value="11" >
                            বান্দরবান
                        </option>
                                                        <option value="10" >
                            খাগড়াছড়ি
                        </option>
                                                        <option value="9" >
                            কক্সবাজার
                        </option>
                                                        <option value="8" >
                            চট্টগ্রাম
                        </option>
                                                        <option value="7" >
                            লক্ষ্মীপুর
                        </option>
                                                        <option value="6" >
                            চাঁদপুর
                        </option>
                                                        <option value="5" >
                            নোয়াখালী
                        </option>
                                                        <option value="4" >
                            রাঙ্গামাটি
                        </option>
                                                        <option value="3" >
                            ব্রাহ্মণবাড়িয়া
                        </option>
                                                        <option value="2" >
                            ফেনী
                        </option>
                                                        <option value="1" >
                            কুমিল্লা
                        </option>
                                                </select>
            </div>
            <div class="col-md-3  py-1">
                <select name="upazila_id" id="upazila_id" class="js-example-basic-single form-select" data-width="100%">
                    <option disabled selected>-- উপজেলা/থানা নির্বাচন করুন --</option>
                                                        <option value="556" >
                            শাহজাহানপুর
                        </option>
                                                        <option value="555" >
                            গেন্ডারিয়া
                        </option>
                                                        <option value="554" >
                            শ্যামপুর
                        </option>
                                                        <option value="553" >
                            ডেমরা
                        </option>
                                                        <option value="552" >
                            রমনা মডেল
                        </option>
                                                        <option value="551" >
                            হাজারীবাগ
                        </option>
                                                        <option value="550" >
                            খিলগাঁও
                        </option>
                                                        <option value="549" >
                            শাহবাগ
                        </option>
                                                        <option value="548" >
                            কলাবাগান
                        </option>
                                                        <option value="547" >
                            লালবাগ
                        </option>
                                                        <option value="546" >
                            কোতোয়ালি
                        </option>
                                                        <option value="545" >
                            কামরাঙ্গীরচর
                        </option>
                                                        <option value="544" >
                            কদমতলী
                        </option>
                                                        <option value="543" >
                            সবুজবাগ
                        </option>
                                                        <option value="542" >
                            রামপুরা
                        </option>
                                                        <option value="541" >
                            তেজগাঁও শিল্পাঞ্চল
                        </option>
                                                        <option value="540" >
                            শাহ আলী
                        </option>
                                                        <option value="539" >
                            পল্লবী
                        </option>
                                                        <option value="538" >
                            উত্তরা মডেল
                        </option>
                                                        <option value="537" >
                            তুরাগ
                        </option>
                                                        <option value="536" >
                            উত্তরখান
                        </option>
                                                        <option value="535" >
                            দক্ষিনখান
                        </option>
                                                        <option value="534" >
                            দারুস সালাম
                        </option>
                                                        <option value="533" >
                            শেরেবাংলা নগর
                        </option>
                                                        <option value="532" >
                            ওয়ারী
                        </option>
                                                        <option value="531" >
                            ভাটারা
                        </option>
                                                        <option value="530" >
                            ভাষানটেক
                        </option>
                                                        <option value="529" >
                            রূপনগর
                        </option>
                                                        <option value="528" >
                            মুগদা
                        </option>
                                                        <option value="527" >
                            উত্তরা পশ্চিম
                        </option>
                                                        <option value="526" >
                            গুলশান
                        </option>
                                                        <option value="525" >
                            যাত্রাবাড়ী
                        </option>
                                                        <option value="524" >
                            সূত্রাপুর
                        </option>
                                                        <option value="523" >
                            ধানমন্ডি
                        </option>
                                                        <option value="522" >
                            কাফরুল
                        </option>
                                                        <option value="521" >
                            খিলখেত
                        </option>
                                                        <option value="520" >
                            ‌নিউ মা‌র্কেট
                        </option>
                                                        <option value="519" >
                            ম‌তি‌ঝিল
                        </option>
                                                        <option value="518" >
                            পল্টন
                        </option>
                                                        <option value="517" >
                            তেজগাঁও
                        </option>
                                                        <option value="516" >
                            ‌মিরপুর,
                        </option>
                                                        <option value="515" >
                            ‌মোহাম্মদপুর
                        </option>
                                                        <option value="514" >
                            খালিশপুর
                        </option>
                                                        <option value="513" >
                            বন্দর,
                        </option>
                                                        <option value="512" >
                            চকবাজার,
                        </option>
                                                        <option value="511" >
                            কেন্টরমেন্ট
                        </option>
                                                        <option value="510" >
                            বিমানবন্দর
                        </option>
                                                        <option value="509" >
                            বংশাল
                        </option>
                                                        <option value="508" >
                            বনানী
                        </option>
                                                        <option value="507" >
                            বাড্ডা
                        </option>
                                                        <option value="506" >
                            আদাবর
                        </option>
                                                        <option value="505" >
                            আকবর শাহ
                        </option>
                                                        <option value="504" >
                            বাকলিয়া
                        </option>
                                                        <option value="503" >
                            বাইজিদ বোস্তামী
                        </option>
                                                        <option value="502" >
                            চান্দগাঁও
                        </option>
                                                        <option value="501" >
                            চকবাজার
                        </option>
                                                        <option value="500" >
                            কোতোয়ালী
                        </option>
                                                        <option value="499" >
                            ডবলমুরিং
                        </option>
                                                        <option value="498" >
                            ইপিজেট
                        </option>
                                                        <option value="497" >
                            হালিশহর
                        </option>
                                                        <option value="496" >
                            খুলশী
                        </option>
                                                        <option value="495" >
                            পাহাড়তলী
                        </option>
                                                        <option value="494" >
                            পাচঁলাইশ
                        </option>
                                                        <option value="493" >
                            পতেঙ্গা
                        </option>
                                                        <option value="492" >
                            সদরঘাট
                        </option>
                                                        <option value="491" >
                            নেত্রকোণা সদর
                        </option>
                                                        <option value="490" >
                            পূর্বধলা
                        </option>
                                                        <option value="489" >
                            মোহনগঞ্জ
                        </option>
                                                        <option value="488" >
                            কলমাকান্দা
                        </option>
                                                        <option value="487" >
                            খালিয়াজুরী
                        </option>
                                                        <option value="486" >
                            মদন
                        </option>
                                                        <option value="485" >
                            আটপাড়া
                        </option>
                                                        <option value="484" >
                            কেন্দুয়া
                        </option>
                                                        <option value="483" >
                            দুর্গাপুর
                        </option>
                                                        <option value="482" >
                            বারহাট্টা
                        </option>
                                                        <option value="481" >
                            বকশীগঞ্জ
                        </option>
                                                        <option value="480" >
                            মাদারগঞ্জ
                        </option>
                                                        <option value="479" >
                            সরিষাবাড়ী
                        </option>
                                                        <option value="478" >
                            দেওয়ানগঞ্জ
                        </option>
                                                        <option value="477" >
                            ইসলামপুর
                        </option>
                                                        <option value="476" >
                            মেলান্দহ
                        </option>
                                                        <option value="475" >
                            জামালপুর সদর
                        </option>
                                                        <option value="474" >
                            তারাকান্দা
                        </option>
                                                        <option value="473" >
                            নান্দাইল
                        </option>
                                                        <option value="472" >
                            ঈশ্বরগঞ্জ
                        </option>
                                                        <option value="471" >
                            গফরগাঁও
                        </option>
                                                        <option value="470" >
                            গৌরীপুর
                        </option>
                                                        <option value="469" >
                            হালুয়াঘাট
                        </option>
                                                        <option value="468" >
                            ফুলপুর
                        </option>
                                                        <option value="467" >
                            ধোবাউড়া
                        </option>
                                                        <option value="466" >
                            ময়মনসিংহ সদর
                        </option>
                                                        <option value="465" >
                            মুক্তাগাছা
                        </option>
                                                        <option value="464" >
                            ভালুকা
                        </option>
                                                        <option value="463" >
                            ত্রিশাল
                        </option>
                                                        <option value="462" >
                            ফুলবাড়ীয়া
                        </option>
                                                        <option value="461" >
                            ঝিনাইগাতী
                        </option>
                                                        <option value="460" >
                            নকলা
                        </option>
                                                        <option value="459" >
                            শ্রীবরদী
                        </option>
                                                        <option value="458" >
                            নালিতাবাড়ী
                        </option>
                                                        <option value="457" >
                            শেরপুর সদর
                        </option>
                                                        <option value="456" >
                            চর রাজিবপুর
                        </option>
                                                        <option value="455" >
                            রৌমারী
                        </option>
                                                        <option value="454" >
                            চিলমারী
                        </option>
                                                        <option value="453" >
                            উলিপুর
                        </option>
                                                        <option value="452" >
                            রাজারহাট
                        </option>
                                                        <option value="451" >
                            ফুলবাড়ী
                        </option>
                                                        <option value="450" >
                            ভুরুঙ্গামারী
                        </option>
                                                        <option value="449" >
                            নাগেশ্বরী
                        </option>
                                                        <option value="448" >
                            কুড়িগ্রাম সদর
                        </option>
                                                        <option value="447" >
                            পীরগাছা
                        </option>
                                                        <option value="446" >
                            কাউনিয়া
                        </option>
                                                        <option value="445" >
                            পীরগঞ্জ
                        </option>
                                                        <option value="444" >
                            মিঠাপুকুর
                        </option>
                                                        <option value="443" >
                            বদরগঞ্জ
                        </option>
                                                        <option value="442" >
                            তারাগঞ্জ
                        </option>
                                                        <option value="441" >
                            গংগাচড়া
                        </option>
                                                        <option value="440" >
                            রংপুর সদর
                        </option>
                                                        <option value="439" >
                            বালিয়াডাঙ্গী
                        </option>
                                                        <option value="438" >
                            হরিপুর
                        </option>
                                                        <option value="437" >
                            রাণীশংকৈল
                        </option>
                                                        <option value="436" >
                            পীরগঞ্জ
                        </option>
                                                        <option value="435" >
                            ঠাকুরগাঁও সদর
                        </option>
                                                        <option value="434" >
                            ফুলছড়ি
                        </option>
                                                        <option value="433" >
                            সুন্দরগঞ্জ
                        </option>
                                                        <option value="432" >
                            গোবিন্দগঞ্জ
                        </option>
                                                        <option value="431" >
                            সাঘাটা
                        </option>
                                                        <option value="430" >
                            পলাশবাড়ী
                        </option>
                                                        <option value="429" >
                            গাইবান্ধা সদর
                        </option>
                                                        <option value="428" >
                            সাদুল্লাপুর
                        </option>
                                                        <option value="427" >
                            নীলফামারী সদর
                        </option>
                                                        <option value="426" >
                            কিশোরগঞ্জ
                        </option>
                                                        <option value="425" >
                            জলঢাকা
                        </option>
                                                        <option value="424" >
                            ডিমলা
                        </option>
                                                        <option value="423" >
                            ডোমার
                        </option>
                                                        <option value="422" >
                            সৈয়দপুর
                        </option>
                                                        <option value="421" >
                            আদিতমারী
                        </option>
                                                        <option value="420" >
                            পাটগ্রাম
                        </option>
                                                        <option value="419" >
                            হাতীবান্ধা
                        </option>
                                                        <option value="418" >
                            কালীগঞ্জ
                        </option>
                                                        <option value="417" >
                            লালমনিরহাট সদর
                        </option>
                                                        <option value="416" >
                            চিরিরবন্দর
                        </option>
                                                        <option value="415" >
                            বিরল
                        </option>
                                                        <option value="414" >
                            খানসামা
                        </option>
                                                        <option value="413" >
                            হাকিমপুর
                        </option>
                                                        <option value="412" >
                            দিনাজপুর সদর
                        </option>
                                                        <option value="411" >
                            ফুলবাড়ী
                        </option>
                                                        <option value="410" >
                            কাহারোল
                        </option>
                                                        <option value="409" >
                            বোচাগঞ্জ
                        </option>
                                                        <option value="408" >
                            পার্বতীপুর
                        </option>
                                                        <option value="407" >
                            বিরামপুর
                        </option>
                                                        <option value="406" >
                            ঘোড়াঘাট
                        </option>
                                                        <option value="405" >
                            বীরগঞ্জ
                        </option>
                                                        <option value="404" >
                            নবাবগঞ্জ
                        </option>
                                                        <option value="403" >
                            তেতুলিয়া
                        </option>
                                                        <option value="402" >
                            আটোয়ারী
                        </option>
                                                        <option value="401" >
                            বোদা
                        </option>
                                                        <option value="400" >
                            দেবীগঞ্জ
                        </option>
                                                        <option value="399" >
                            পঞ্চগড় সদর
                        </option>
                                                        <option value="398" >
                            সালথা
                        </option>
                                                        <option value="397" >
                            মধুখালী
                        </option>
                                                        <option value="396" >
                            চরভদ্রাসন
                        </option>
                                                        <option value="395" >
                            ভাঙ্গা
                        </option>
                                                        <option value="394" >
                            নগরকান্দা
                        </option>
                                                        <option value="393" >
                            সদরপুর
                        </option>
                                                        <option value="392" >
                            বোয়ালমারী
                        </option>
                                                        <option value="391" >
                            আলফাডাঙ্গা
                        </option>
                                                        <option value="390" >
                            ফরিদপুর সদর
                        </option>
                                                        <option value="389" >
                            মুকসুদপুর
                        </option>
                                                        <option value="388" >
                            কোটালীপাড়া
                        </option>
                                                        <option value="387" >
                            টুংগীপাড়া
                        </option>
                                                        <option value="386" >
                            কাশিয়ানী
                        </option>
                                                        <option value="385" >
                            গোপালগঞ্জ সদর
                        </option>
                                                        <option value="384" >
                            রাজৈর
                        </option>
                                                        <option value="383" >
                            কালকিনি
                        </option>
                                                        <option value="382" >
                            শিবচর
                        </option>
                                                        <option value="381" >
                            মাদারীপুর সদর
                        </option>
                                                        <option value="380" >
                            কালুখালী
                        </option>
                                                        <option value="379" >
                            বালিয়াকান্দি
                        </option>
                                                        <option value="378" >
                            পাংশা
                        </option>
                                                        <option value="377" >
                            গোয়ালন্দ
                        </option>
                                                        <option value="376" >
                            রাজবাড়ী সদর
                        </option>
                                                        <option value="375" >
                            টংগীবাড়ি
                        </option>
                                                        <option value="374" >
                            গজারিয়া
                        </option>
                                                        <option value="373" >
                            লৌহজং
                        </option>
                                                        <option value="372" >
                            সিরাজদিখান
                        </option>
                                                        <option value="371" >
                            শ্রীনগর
                        </option>
                                                        <option value="370" >
                            মুন্সিগঞ্জ সদর
                        </option>
                                                        <option value="369" >
                            দোহার
                        </option>
                                                        <option value="368" >
                            নবাবগঞ্জ
                        </option>
                                                        <option value="367" >
                            কেরাণীগঞ্জ
                        </option>
                                                        <option value="366" >
                            ধামরাই
                        </option>
                                                        <option value="365" >
                            সাভার
                        </option>
                                                        <option value="364" >
                            সিংগাইর
                        </option>
                                                        <option value="363" >
                            দৌলতপুর
                        </option>
                                                        <option value="362" >
                            শিবালয়
                        </option>
                                                        <option value="361" >
                            ঘিওর
                        </option>
                                                        <option value="360" >
                            মানিকগঞ্জ সদর
                        </option>
                                                        <option value="359" >
                            সাটুরিয়া
                        </option>
                                                        <option value="358" >
                            হরিরামপুর
                        </option>
                                                        <option value="357" >
                            নিকলী
                        </option>
                                                        <option value="356" >
                            মিঠামইন
                        </option>
                                                        <option value="355" >
                            অষ্টগ্রাম
                        </option>
                                                        <option value="354" >
                            বাজিতপুর
                        </option>
                                                        <option value="353" >
                            করিমগঞ্জ
                        </option>
                                                        <option value="352" >
                            কিশোরগঞ্জ সদর
                        </option>
                                                        <option value="351" >
                            কুলিয়ারচর
                        </option>
                                                        <option value="350" >
                            পাকুন্দিয়া
                        </option>
                                                        <option value="349" >
                            হোসেনপুর
                        </option>
                                                        <option value="348" >
                            তাড়াইল
                        </option>
                                                        <option value="347" >
                            ভৈরব
                        </option>
                                                        <option value="346" >
                            কটিয়াদী
                        </option>
                                                        <option value="345" >
                            ইটনা
                        </option>
                                                        <option value="344" >
                            ধনবাড়ী
                        </option>
                                                        <option value="343" >
                            কালিহাতী
                        </option>
                                                        <option value="342" >
                            টাঙ্গাইল সদর
                        </option>
                                                        <option value="341" >
                            সখিপুর
                        </option>
                                                        <option value="340" >
                            নাগরপুর
                        </option>
                                                        <option value="339" >
                            মির্জাপুর
                        </option>
                                                        <option value="338" >
                            মধুপুর
                        </option>
                                                        <option value="337" >
                            গোপালপুর
                        </option>
                                                        <option value="336" >
                            ঘাটাইল
                        </option>
                                                        <option value="335" >
                            দেলদুয়ার
                        </option>
                                                        <option value="334" >
                            ভুয়াপুর
                        </option>
                                                        <option value="333" >
                            বাসাইল
                        </option>
                                                        <option value="332" >
                            সোনারগাঁ
                        </option>
                                                        <option value="331" >
                            রূপগঞ্জ
                        </option>
                                                        <option value="330" >
                            নারায়নগঞ্জ সদর
                        </option>
                                                        <option value="329" >
                            বন্দর
                        </option>
                                                        <option value="328" >
                            আড়াইহাজার
                        </option>
                                                        <option value="327" >
                            ডামুড্যা
                        </option>
                                                        <option value="326" >
                            ভেদরগঞ্জ
                        </option>
                                                        <option value="325" >
                            গোসাইরহাট
                        </option>
                                                        <option value="324" >
                            জাজিরা
                        </option>
                                                        <option value="323" >
                            নড়িয়া
                        </option>
                                                        <option value="322" >
                            শরিয়তপুর সদর
                        </option>
                                                        <option value="321" >
                            শ্রীপুর
                        </option>
                                                        <option value="320" >
                            গাজীপুর সদর
                        </option>
                                                        <option value="319" >
                            কাপাসিয়া
                        </option>
                                                        <option value="318" >
                            কালিয়াকৈর
                        </option>
                                                        <option value="317" >
                            কালীগঞ্জ
                        </option>
                                                        <option value="316" >
                            শিবপুর
                        </option>
                                                        <option value="315" >
                            রায়পুরা
                        </option>
                                                        <option value="314" >
                            পলাশ
                        </option>
                                                        <option value="313" >
                            নরসিংদী সদর
                        </option>
                                                        <option value="312" >
                            মনোহরদী
                        </option>
                                                        <option value="311" >
                            বেলাবো
                        </option>
                                                        <option value="310" >
                            দিরাই
                        </option>
                                                        <option value="309" >
                            শাল্লা
                        </option>
                                                        <option value="308" >
                            জামালগঞ্জ
                        </option>
                                                        <option value="307" >
                            ধর্মপাশা
                        </option>
                                                        <option value="306" >
                            তাহিরপুর
                        </option>
                                                        <option value="305" >
                            দোয়ারাবাজার
                        </option>
                                                        <option value="304" >
                            জগন্নাথপুর
                        </option>
                                                        <option value="303" >
                            ছাতক
                        </option>
                                                        <option value="302" >
                            বিশ্বম্ভরপুর
                        </option>
                                                        <option value="301" >
                            দক্ষিণ সুনামগঞ্জ
                        </option>
                                                        <option value="300" >
                            সুনামগঞ্জ সদর
                        </option>
                                                        <option value="299" >
                            মাধবপুর
                        </option>
                                                        <option value="298" >
                            হবিগঞ্জ সদর
                        </option>
                                                        <option value="297" >
                            চুনারুঘাট
                        </option>
                                                        <option value="296" >
                            লাখাই
                        </option>
                                                        <option value="295" >
                            বানিয়াচং
                        </option>
                                                        <option value="294" >
                            আজমিরীগঞ্জ
                        </option>
                                                        <option value="293" >
                            বাহুবল
                        </option>
                                                        <option value="292" >
                            নবীগঞ্জ
                        </option>
                                                        <option value="291" >
                            জুড়ী
                        </option>
                                                        <option value="290" >
                            শ্রীমঙ্গল
                        </option>
                                                        <option value="289" >
                            রাজনগর
                        </option>
                                                        <option value="288" >
                            মৌলভীবাজার সদর
                        </option>
                                                        <option value="287" >
                            কুলাউড়া
                        </option>
                                                        <option value="286" >
                            কমলগঞ্জ
                        </option>
                                                        <option value="285" >
                            বড়লেখা
                        </option>
                                                        <option value="284" >
                            ওসমানী নগর
                        </option>
                                                        <option value="283" >
                            দক্ষিণ সুরমা
                        </option>
                                                        <option value="282" >
                            জকিগঞ্জ
                        </option>
                                                        <option value="281" >
                            সিলেট সদর
                        </option>
                                                        <option value="280" >
                            কানাইঘাট
                        </option>
                                                        <option value="279" >
                            জৈন্তাপুর
                        </option>
                                                        <option value="278" >
                            গোয়াইনঘাট
                        </option>
                                                        <option value="277" >
                            গোলাপগঞ্জ
                        </option>
                                                        <option value="276" >
                            ফেঞ্চুগঞ্জ
                        </option>
                                                        <option value="275" >
                            কোম্পানীগঞ্জ
                        </option>
                                                        <option value="274" >
                            বিশ্বনাথ
                        </option>
                                                        <option value="273" >
                            বিয়ানীবাজার
                        </option>
                                                        <option value="272" >
                            বালাগঞ্জ
                        </option>
                                                        <option value="271" >
                            তালতলি
                        </option>
                                                        <option value="270" >
                            পাথরঘাটা
                        </option>
                                                        <option value="269" >
                            বামনা
                        </option>
                                                        <option value="268" >
                            বেতাগী
                        </option>
                                                        <option value="267" >
                            বরগুনা সদর
                        </option>
                                                        <option value="266" >
                            আমতলী
                        </option>
                                                        <option value="265" >
                            লালমোহন
                        </option>
                                                        <option value="264" >
                            তজুমদ্দিন
                        </option>
                                                        <option value="263" >
                            মনপুরা
                        </option>
                                                        <option value="262" >
                            দৌলতখান
                        </option>
                                                        <option value="261" >
                            চরফ্যাশন
                        </option>
                                                        <option value="260" >
                            বোরহান উদ্দিন
                        </option>
                                                        <option value="259" >
                            ভোলা সদর
                        </option>
                                                        <option value="258" >
                            হিজলা
                        </option>
                                                        <option value="257" >
                            মুলাদী
                        </option>
                                                        <option value="256" >
                            মেহেন্দিগঞ্জ
                        </option>
                                                        <option value="255" >
                            আগৈলঝাড়া
                        </option>
                                                        <option value="254" >
                            গৌরনদী
                        </option>
                                                        <option value="253" >
                            বানারীপাড়া
                        </option>
                                                        <option value="252" >
                            উজিরপুর
                        </option>
                                                        <option value="251" >
                            বাবুগঞ্জ
                        </option>
                                                        <option value="250" >
                            বাকেরগঞ্জ
                        </option>
                                                        <option value="249" >
                            বরিশাল সদর
                        </option>
                                                        <option value="248" >
                            নেছারাবাদ
                        </option>
                                                        <option value="247" >
                            মঠবাড়ীয়া
                        </option>
                                                        <option value="246" >
                            ভান্ডারিয়া
                        </option>
                                                        <option value="245" >
                            জিয়ানগর
                        </option>
                                                        <option value="244" >
                            কাউখালী
                        </option>
                                                        <option value="243" >
                            নাজিরপুর
                        </option>
                                                        <option value="242" >
                            পিরোজপুর সদর
                        </option>
                                                        <option value="241" >
                            রাঙ্গাবালী
                        </option>
                                                        <option value="240" >
                            গলাচিপা
                        </option>
                                                        <option value="239" >
                            মির্জাগঞ্জ
                        </option>
                                                        <option value="238" >
                            কলাপাড়া
                        </option>
                                                        <option value="237" >
                            দশমিনা
                        </option>
                                                        <option value="236" >
                            দুমকি
                        </option>
                                                        <option value="235" >
                            পটুয়াখালী সদর
                        </option>
                                                        <option value="234" >
                            বাউফল
                        </option>
                                                        <option value="233" >
                            রাজাপুর
                        </option>
                                                        <option value="232" >
                            নলছিটি
                        </option>
                                                        <option value="231" >
                            কাঠালিয়া
                        </option>
                                                        <option value="230" >
                            ঝালকাঠি সদর
                        </option>
                                                        <option value="229" >
                            মহেশপুর
                        </option>
                                                        <option value="228" >
                            কোটচাঁদপুর
                        </option>
                                                        <option value="227" >
                            কালীগঞ্জ
                        </option>
                                                        <option value="226" >
                            হরিণাকুন্ডু
                        </option>
                                                        <option value="225" >
                            শৈলকুপা
                        </option>
                                                        <option value="224" >
                            ঝিনাইদহ সদর
                        </option>
                                                        <option value="223" >
                            চিতলমারী
                        </option>
                                                        <option value="222" >
                            মোংলা
                        </option>
                                                        <option value="221" >
                            কচুয়া
                        </option>
                                                        <option value="220" >
                            মোড়েলগঞ্জ
                        </option>
                                                        <option value="219" >
                            রামপাল
                        </option>
                                                        <option value="218" >
                            শরণখোলা
                        </option>
                                                        <option value="217" >
                            মোল্লাহাট
                        </option>
                                                        <option value="216" >
                            বাগেরহাট সদর
                        </option>
                                                        <option value="215" >
                            ফকিরহাট
                        </option>
                                                        <option value="214" >
                            কয়রা
                        </option>
                                                        <option value="213" >
                            দাকোপ
                        </option>
                                                        <option value="212" >
                            বটিয়াঘাটা
                        </option>
                                                        <option value="211" >
                            ডুমুরিয়া
                        </option>
                                                        <option value="210" >
                            তেরখাদা
                        </option>
                                                        <option value="209" >
                            রূপসা
                        </option>
                                                        <option value="208" >
                            দিঘলিয়া
                        </option>
                                                        <option value="207" >
                            ফুলতলা
                        </option>
                                                        <option value="206" >
                            পাইকগাছা
                        </option>
                                                        <option value="205" >
                            মহম্মদপুর
                        </option>
                                                        <option value="204" >
                            মাগুরা সদর
                        </option>
                                                        <option value="203" >
                            শ্রীপুর
                        </option>
                                                        <option value="202" >
                            শালিখা
                        </option>
                                                        <option value="201" >
                            ভেড়ামারা
                        </option>
                                                        <option value="200" >
                            দৌলতপুর
                        </option>
                                                        <option value="199" >
                            মিরপুর
                        </option>
                                                        <option value="198" >
                            খোকসা
                        </option>
                                                        <option value="197" >
                            কুমারখালী
                        </option>
                                                        <option value="196" >
                            কুষ্টিয়া সদর
                        </option>
                                                        <option value="195" >
                            জীবননগর
                        </option>
                                                        <option value="194" >
                            দামুড়হুদা
                        </option>
                                                        <option value="193" >
                            আলমডাঙ্গা
                        </option>
                                                        <option value="192" >
                            চুয়াডাঙ্গা সদর
                        </option>
                                                        <option value="191" >
                            কালিয়া
                        </option>
                                                        <option value="190" >
                            লোহাগড়া
                        </option>
                                                        <option value="189" >
                            নড়াইল সদর
                        </option>
                                                        <option value="188" >
                            গাংনী
                        </option>
                                                        <option value="187" >
                            মেহেরপুর সদর
                        </option>
                                                        <option value="186" >
                            মুজিবনগর
                        </option>
                                                        <option value="185" >
                            কালিগঞ্জ
                        </option>
                                                        <option value="184" >
                            তালা
                        </option>
                                                        <option value="183" >
                            শ্যামনগর
                        </option>
                                                        <option value="182" >
                            সাতক্ষীরা সদর
                        </option>
                                                        <option value="181" >
                            কলারোয়া
                        </option>
                                                        <option value="180" >
                            দেবহাটা
                        </option>
                                                        <option value="179" >
                            আশাশুনি
                        </option>
                                                        <option value="178" >
                            শার্শা
                        </option>
                                                        <option value="177" >
                            যশোর সদর
                        </option>
                                                        <option value="176" >
                            কেশবপুর
                        </option>
                                                        <option value="175" >
                            ঝিকরগাছা
                        </option>
                                                        <option value="174" >
                            চৌগাছা
                        </option>
                                                        <option value="173" >
                            বাঘারপাড়া
                        </option>
                                                        <option value="172" >
                            অভয়নগর
                        </option>
                                                        <option value="171" >
                            মণিরামপুর
                        </option>
                                                        <option value="170" >
                            সাপাহার
                        </option>
                                                        <option value="169" >
                            পোরশা
                        </option>
                                                        <option value="168" >
                            নওগাঁ সদর
                        </option>
                                                        <option value="167" >
                            রাণীনগর
                        </option>
                                                        <option value="166" >
                            আত্রাই
                        </option>
                                                        <option value="165" >
                            মান্দা
                        </option>
                                                        <option value="164" >
                            নিয়ামতপুর
                        </option>
                                                        <option value="163" >
                            ধামইরহাট
                        </option>
                                                        <option value="162" >
                            পত্নিতলা
                        </option>
                                                        <option value="161" >
                            বদলগাছী
                        </option>
                                                        <option value="160" >
                            মহাদেবপুর
                        </option>
                                                        <option value="159" >
                            শিবগঞ্জ
                        </option>
                                                        <option value="158" >
                            ভোলাহাট
                        </option>
                                                        <option value="157" >
                            নাচোল
                        </option>
                                                        <option value="156" >
                            গোমস্তাপুর
                        </option>
                                                        <option value="155" >
                            চাঁপাইনবাবগঞ্জ সদর
                        </option>
                                                        <option value="154" >
                            জয়পুরহাট সদর
                        </option>
                                                        <option value="153" >
                            পাঁচবিবি
                        </option>
                                                        <option value="152" >
                            ক্ষেতলাল
                        </option>
                                                        <option value="151" >
                            কালাই
                        </option>
                                                        <option value="150" >
                            আক্কেলপুর
                        </option>
                                                        <option value="149" >
                            নলডাঙ্গা
                        </option>
                                                        <option value="148" >
                            গুরুদাসপুর
                        </option>
                                                        <option value="147" >
                            লালপুর
                        </option>
                                                        <option value="146" >
                            বাগাতিপাড়া
                        </option>
                                                        <option value="145" >
                            বড়াইগ্রাম
                        </option>
                                                        <option value="144" >
                            সিংড়া
                        </option>
                                                        <option value="143" >
                            নাটোর সদর
                        </option>
                                                        <option value="142" >
                            বাগমারা
                        </option>
                                                        <option value="141" >
                            তানোর
                        </option>
                                                        <option value="140" >
                            গোদাগাড়ী
                        </option>
                                                        <option value="139" >
                            বাঘা
                        </option>
                                                        <option value="138" >
                            পুঠিয়া
                        </option>
                                                        <option value="137" >
                            চারঘাট
                        </option>
                                                        <option value="136" >
                            মোহনপুর
                        </option>
                                                        <option value="135" >
                            দুর্গাপুর
                        </option>
                                                        <option value="134" >
                            পবা
                        </option>
                                                        <option value="133" >
                            শিবগঞ্জ
                        </option>
                                                        <option value="132" >
                            শেরপুর
                        </option>
                                                        <option value="131" >
                            গাবতলী
                        </option>
                                                        <option value="130" >
                            ধুনট
                        </option>
                                                        <option value="129" >
                            সোনাতলা
                        </option>
                                                        <option value="128" >
                            নন্দিগ্রাম
                        </option>
                                                        <option value="127" >
                            আদমদিঘি
                        </option>
                                                        <option value="126" >
                            দুপচাচিঁয়া
                        </option>
                                                        <option value="125" >
                            শাজাহানপুর
                        </option>
                                                        <option value="124" >
                            সারিয়াকান্দি
                        </option>
                                                        <option value="123" >
                            বগুড়া সদর
                        </option>
                                                        <option value="122" >
                            কাহালু
                        </option>
                                                        <option value="121" >
                            ফরিদপুর
                        </option>
                                                        <option value="120" >
                            সাঁথিয়া
                        </option>
                                                        <option value="119" >
                            চাটমোহর
                        </option>
                                                        <option value="118" >
                            আটঘরিয়া
                        </option>
                                                        <option value="117" >
                            বেড়া
                        </option>
                                                        <option value="116" >
                            পাবনা সদর
                        </option>
                                                        <option value="115" >
                            ভাঙ্গুড়া
                        </option>
                                                        <option value="114" >
                            ঈশ্বরদী
                        </option>
                                                        <option value="113" >
                            সুজানগর
                        </option>
                                                        <option value="112" >
                            উল্লাপাড়া
                        </option>
                                                        <option value="111" >
                            তাড়াশ
                        </option>
                                                        <option value="110" >
                            সিরাজগঞ্জ সদর
                        </option>
                                                        <option value="109" >
                            শাহজাদপুর
                        </option>
                                                        <option value="108" >
                            রায়গঞ্জ
                        </option>
                                                        <option value="107" >
                            কাজীপুর
                        </option>
                                                        <option value="106" >
                            কামারখন্দ
                        </option>
                                                        <option value="105" >
                            চৌহালি
                        </option>
                                                        <option value="104" >
                            বেলকুচি
                        </option>
                                                        <option value="103" >
                            থানচি
                        </option>
                                                        <option value="102" >
                            রুমা
                        </option>
                                                        <option value="101" >
                            লামা
                        </option>
                                                        <option value="100" >
                            রোয়াংছড়ি
                        </option>
                                                        <option value="99" >
                            নাইক্ষ্যংছড়ি
                        </option>
                                                        <option value="98" >
                            আলীকদম
                        </option>
                                                        <option value="97" >
                            বান্দরবান সদর
                        </option>
                                                        <option value="96" >
                            গুইমারা
                        </option>
                                                        <option value="95" >
                            মাটিরাঙ্গা
                        </option>
                                                        <option value="94" >
                            রামগড়
                        </option>
                                                        <option value="93" >
                            মানিকছড়ি
                        </option>
                                                        <option value="92" >
                            মহালছড়ি
                        </option>
                                                        <option value="91" >
                            লক্ষীছড়ি
                        </option>
                                                        <option value="90" >
                            পানছড়ি
                        </option>
                                                        <option value="89" >
                            দিঘীনালা
                        </option>
                                                        <option value="88" >
                            খাগড়াছড়ি সদর
                        </option>
                                                        <option value="87" >
                            টেকনাফ
                        </option>
                                                        <option value="86" >
                            রামু
                        </option>
                                                        <option value="85" >
                            পেকুয়া
                        </option>
                                                        <option value="84" >
                            মহেশখালী
                        </option>
                                                        <option value="83" >
                            উখিয়া
                        </option>
                                                        <option value="82" >
                            কুতুবদিয়া
                        </option>
                                                        <option value="81" >
                            চকরিয়া
                        </option>
                                                        <option value="80" >
                            কক্সবাজার সদর
                        </option>
                                                        <option value="79" >
                            কর্ণফুলী
                        </option>
                                                        <option value="78" >
                            রাউজান
                        </option>
                                                        <option value="77" >
                            ফটিকছড়ি
                        </option>
                                                        <option value="76" >
                            হাটহাজারী
                        </option>
                                                        <option value="75" >
                            লোহাগাড়া
                        </option>
                                                        <option value="74" >
                            সাতকানিয়া
                        </option>
                                                        <option value="73" >
                            চন্দনাইশ
                        </option>
                                                        <option value="72" >
                            আনোয়ারা
                        </option>
                                                        <option value="71" >
                            বোয়ালখালী
                        </option>
                                                        <option value="70" >
                            বাঁশখালী
                        </option>
                                                        <option value="69" >
                            সন্দ্বীপ
                        </option>
                                                        <option value="68" >
                            পটিয়া
                        </option>
                                                        <option value="67" >
                            মীরসরাই
                        </option>
                                                        <option value="66" >
                            সীতাকুন্ড
                        </option>
                                                        <option value="65" >
                            রাঙ্গুনিয়া
                        </option>
                                                        <option value="64" >
                            রামগঞ্জ
                        </option>
                                                        <option value="63" >
                            রামগতি
                        </option>
                                                        <option value="62" >
                            রায়পুর
                        </option>
                                                        <option value="61" >
                            কমলনগর
                        </option>
                                                        <option value="60" >
                            লক্ষ্মীপুর সদর
                        </option>
                                                        <option value="59" >
                            ফরিদগঞ্জ
                        </option>
                                                        <option value="58" >
                            মতলব উত্তর
                        </option>
                                                        <option value="57" >
                            হাজীগঞ্জ
                        </option>
                                                        <option value="56" >
                            মতলব দক্ষিণ
                        </option>
                                                        <option value="55" >
                            চাঁদপুর সদর
                        </option>
                                                        <option value="54" >
                            শাহরাস্তি
                        </option>
                                                        <option value="53" >
                            কচুয়া
                        </option>
                                                        <option value="52" >
                            হাইমচর
                        </option>
                                                        <option value="51" >
                            সোনাইমুড়ী
                        </option>
                                                        <option value="50" >
                            চাটখিল
                        </option>
                                                        <option value="49" >
                            সেনবাগ
                        </option>
                                                        <option value="48" >
                            কবিরহাট
                        </option>
                                                        <option value="47" >
                            সুবর্ণচর
                        </option>
                                                        <option value="46" >
                            হাতিয়া
                        </option>
                                                        <option value="45" >
                            বেগমগঞ্জ
                        </option>
                                                        <option value="44" >
                            কোম্পানীগঞ্জ
                        </option>
                                                        <option value="43" >
                            নোয়াখালী সদর
                        </option>
                                                        <option value="42" >
                            নানিয়ারচর
                        </option>
                                                        <option value="41" >
                            জুরাছড়ি
                        </option>
                                                        <option value="40" >
                            বিলাইছড়ি
                        </option>
                                                        <option value="39" >
                            রাজস্থলী
                        </option>
                                                        <option value="38" >
                            লংগদু
                        </option>
                                                        <option value="37" >
                            বরকল
                        </option>
                                                        <option value="36" >
                            বাঘাইছড়ি
                        </option>
                                                        <option value="35" >
                            কাউখালী
                        </option>
                                                        <option value="34" >
                            কাপ্তাই
                        </option>
                                                        <option value="33" >
                            রাঙ্গামাটি সদর
                        </option>
                                                        <option value="32" >
                            বিজয়নগর
                        </option>
                                                        <option value="31" >
                            বাঞ্ছারামপুর
                        </option>
                                                        <option value="30" >
                            নবীনগর
                        </option>
                                                        <option value="29" >
                            আখাউড়া
                        </option>
                                                        <option value="28" >
                            আশুগঞ্জ
                        </option>
                                                        <option value="27" >
                            সরাইল
                        </option>
                                                        <option value="26" >
                            নাসিরনগর
                        </option>
                                                        <option value="25" >
                            কসবা
                        </option>
                                                        <option value="24" >
                            ব্রাহ্মণবাড়িয়া সদর
                        </option>
                                                        <option value="23" >
                            দাগনভূঞা
                        </option>
                                                        <option value="22" >
                            পরশুরাম
                        </option>
                                                        <option value="21" >
                            ফুলগাজী
                        </option>
                                                        <option value="20" >
                            সোনাগাজী
                        </option>
                                                        <option value="19" >
                            ফেনী সদর
                        </option>
                                                        <option value="18" >
                            ছাগলনাইয়া
                        </option>
                                                        <option value="17" >
                            লালমাই
                        </option>
                                                        <option value="16" >
                            বুড়িচং
                        </option>
                                                        <option value="15" >
                            তিতাস
                        </option>
                                                        <option value="14" >
                            সদর দক্ষিণ
                        </option>
                                                        <option value="13" >
                            মনোহরগঞ্জ
                        </option>
                                                        <option value="12" >
                            মেঘনা
                        </option>
                                                        <option value="11" >
                            কুমিল্লা সদর
                        </option>
                                                        <option value="10" >
                            নাঙ্গলকোট
                        </option>
                                                        <option value="9" >
                            মুরাদনগর
                        </option>
                                                        <option value="8" >
                            লাকসাম
                        </option>
                                                        <option value="7" >
                            হোমনা
                        </option>
                                                        <option value="6" >
                            দাউদকান্দি
                        </option>
                                                        <option value="5" >
                            চৌদ্দগ্রাম
                        </option>
                                                        <option value="4" >
                            চান্দিনা
                        </option>
                                                        <option value="3" >
                            ব্রাহ্মণপাড়া
                        </option>
                                                        <option value="2" >
                            বরুড়া
                        </option>
                                                        <option value="1" >
                            দেবিদ্বার
                        </option>
                                                </select>
            </div>
            <div class="col-md-3 py-1">
                <button class="btn btn-success w-100">অনুসন্ধান করুন</button>
            </div>
        </div>
    </form>
</div>
</div>

<div class="row">
<div class="table-responsive">
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive">
<thead>
            <tr>
                <th>ক্রমিক নং</th>
                                            <th>ফোন নাম্বার</th>
                <th>ঠিকানা</th>
                                        </tr>
        </thead>
        <tbody>

                                    <tr>
                <td class="text-center">
                    ৩৭
                </td>
                                            <td>
                    ০১৭৯০৩৩৩৯৯৮
                </td>
                <td>
                    DC COURT VHOBON, সিরাজগঞ্জ সদর, সিরাজগঞ্জ, রাজশাহী
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩৬
                </td>
                                            <td>
                    ০১৭১২৮৭৫৭৫৬
                </td>
                <td>
                    ছাতিয়াইন, মাধবপুর, হবিগঞ্জ, সিলেট
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩৫
                </td>
                                            <td>
                    ০১৫১৮৪৪০০৮২
                </td>
                <td>
                    কোলদিয়াড়, দৌলতপুর, কুষ্টিয়া, খুলনা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩৪
                </td>
                                            <td>
                    ০১৮৩৬৬২৮০৫০
                </td>
                <td>
                    সিদলাই, ব্রাহ্মণপাড়া, কুমিল্লা, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩৩
                </td>
                                            <td>
                    ০১৮৩৪৬০৩০৪৮
                </td>
                <td>
                    roton market, সোনারগাঁ, নারায়ণগঞ্জ, ঢাকা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩২
                </td>
                                            <td>
                    ০১৭৭৭২৭৮২১৬
                </td>
                <td>
                    আদর্শ নগর বাজার, মোহনগঞ্জ, নেত্রকোণা, ময়মনসিংহ
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩১
                </td>
                                            <td>
                    ০১৩০৭০৭৫১৬১
                </td>
                <td>
                    Sarisha Union Porisod, পাংশা, রাজবাড়ী, ঢাকা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ৩০
                </td>
                                            <td>
                    ০১৬০৯১৮২৫২৭
                </td>
                <td>
                    ইউনিয়ন ডিজিটাল সেন্টার, ভাওয়াল,, সালথা, ফরিদপুর, ঢাকা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৯
                </td>
                                            <td>
                    ০১৩১৬০৪৯০০২
                </td>
                <td>
                    হাগুড়াকুড়ী, ফুলবাগচালা, মধুপুর, টাঙ্গাইল, ঢাকা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৮
                </td>
                                            <td>
                    ০১৭৯২০৪২৩০১
                </td>
                <td>
                    কালীগঞ্জ পৌরসভার সামনে, কালীগঞ্জ, ঝিনাইদহ, খুলনা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৭
                </td>
                                            <td>
                    ০১৪০১৫১৪৬০৯
                </td>
                <td>
                    পিঞ্জুরী, কোটালীপাড়া, গোপালগঞ্জ, ঢাকা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৬
                </td>
                                            <td>
                    ০১৭১২২৯৯৯৬২
                </td>
                <td>
                    Chotobaisdia, রাঙ্গাবালী, পটুয়াখালী, বরিশাল
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৫
                </td>
                                            <td>
                    ০১৭১২৩০৩১৯৭
                </td>
                <td>
                    আলীনগর, কমলগঞ্জ, মৌলভীবাজার, সিলেট
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৪
                </td>
                                            <td>
                    ০১৯০৭০১৪৮১৪
                </td>
                <td>
                    গ্রামঃ সিঙ্গিয়া বসুপাড়া, ডাকঃ সিঙ্গিয়া -৭৫০০, ইউনিয়নঃ হবখালী, নড়াইল সদর, নড়াইল, খুলনা
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২৩
                </td>
                                            <td>
                    ০১৮৪৩৩১৫১৪২
                </td>
                <td>
                    বিষ্ণুপুর, চাঁদপুর সদর, চাঁদপুর, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২২
                </td>
                                            <td>
                    ০১৫৭৫৬৯২০৯০
                </td>
                <td>
                    BGC Trust, Medical Main Gate, Rowshon Hat, চন্দনাইশ, চট্টগ্রাম, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২১
                </td>
                                            <td>
                    ০১৮৪৭৬৩৫১৯৬
                </td>
                <td>
                    অলি মিয়া হাট, স্কুল গেইটের পার্শ্বে, রাউজান, চট্টগ্রাম, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ২০
                </td>
                                            <td>
                    ০১৮১৮৪৩২৬৪০
                </td>
                <td>
                    দরগাহ রোড়, বিবিরহাট, ফটিকছড়ি পৌরসভা,, ফটিকছড়ি, চট্টগ্রাম, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ১৯
                </td>
                                            <td>
                    ০১৯১৯৪২৩৪৩৬
                </td>
                <td>
                    থানার মোড়, রাহাত আলী স্কুল মার্কেট, পটিয়া, চট্টগ্রাম, চট্টগ্রাম
                </td>
                                        </tr>
                                    <tr>
                <td class="text-center">
                    ১৮
                </td>
                                            <td>
                    ০১৩১২৬৫০৫৭৯
                </td>
                <td>
                    খলিল ভবন, মিরপুর-১, ‌মিরপুর,, ঢাকা, ঢাকা
                </td>
                                        </tr>
                                </tbody>
</table>







    <div class="mt-5">
        <nav class="d-flex justify-items-center justify-content-between">
<div class="d-flex justify-content-between flex-fill d-sm-none">
<ul class="pagination">

                        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">&laquo; Previous</span>
        </li>


                        <li class="page-item">
            <a class="page-link" href="https://amarseba.net/admin/user/center?page=2" rel="next">Next &raquo;</a>
        </li>
                </ul>
</div>

<div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
<div>
    <p class="small text-muted">
        Showing
        <span class="fw-semibold">1</span>
        to
        <span class="fw-semibold">20</span>
        of
        <span class="fw-semibold">37</span>
        results
    </p>
</div>

<div>
    <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>





                                                                                                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                    <li class="page-item"><a class="page-link" href="https://amarseba.net/admin/user/center?page=2">2</a></li>


                                <li class="page-item">
                <a class="page-link" href="https://amarseba.net/admin/user/center?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li>
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
