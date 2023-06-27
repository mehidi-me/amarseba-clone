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
<a href="https://amarseba.net/admin/service/necessary-fonts?cat=BANGLA" class="btn btn-lg btn-success px-4 rounded-0">বাংলা</a>
<a href="https://amarseba.net/admin/service/necessary-fonts?cat=ENGLISH" class="btn btn-lg btn-success px-4 rounded-0">ENGLISH</a>
<a href="https://amarseba.net/admin/service/necessary-fonts?cat=ARABIC" class="btn btn-lg btn-success px-4 rounded-0">ARABIC</a>
</div>

<div class="page_speed_479712846">
<div class="perfect-scrollbar-example page_speed_2139861008">


      <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/PdnlhSQRTXKxKzzpNwclhCZoqRe8eYqyqgNkELt7.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১</span></li>
                <li class=""><span>Font Name: Nikosh</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/1/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/6x2cAPbfZmIzSE8SXpeQ2qZSsd0wxxQ54FapwcIR.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২</span></li>
                <li class=""><span>Font Name: NikoshBAN</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/2/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/USnNRaVu3HXHPsD5pysNJ2bu0fKrfgxFiqkDft9u.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৩</span></li>
                <li class=""><span>Font Name: PadmaEMJ</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/3/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/v6FLHQ5X1MmUoLtVURODZZMVHvXj3IpPOXOJ0eHI.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৪</span></li>
                <li class=""><span>Font Name: MonooOMJ</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/4/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/adpgrHUoCrCSUUGbu0kUURFjwG8ui2RewJ1Q2M1i.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৫</span></li>
                <li class=""><span>Font Name: Aayat 56 ANSI</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/5/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/yPz2uF06WirvlOJmmZixdWk2X0D77mtJFul9W2Rr.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৬</span></li>
                <li class=""><span>Font Name: 13_Misa</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/6/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/ZdzzL5fWQiXRoUELkvfSWt6PBB6qC8ST8JOUEK8e.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৭</span></li>
                <li class=""><span>Font Name: AGA Cordoba</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Arabic Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/7/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/xtsn4ABsXiPvYklACVxmJlMndJ7rwg5rcj7f12OI.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৮</span></li>
                <li class=""><span>Font Name: AGA Arabesque Desktop</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Arabic Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/8/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/cQF4Hd6z1seXLVd0JQ06wRAUNtzmaW9IYULtbf0T.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>৯</span></li>
                <li class=""><span>Font Name: 8Pin Matrix</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/9/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/0okA06AqCilDg8LdPOsRPogozgBoA0BnNEzR5pVW.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১০</span></li>
                <li class=""><span>Font Name: Aayat 56 ANSI2</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/10/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/CJbtEwcWHe76GTt7I2RGRgkiHmvrS3qSg3XpYZO6.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১১</span></li>
                <li class=""><span>Font Name: Abirvab</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/11/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/wDTZKkOJ0PN5TwGOMsFLgPypjJ4EJRTAGlrAF8ns.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১২</span></li>
                <li class=""><span>Font Name: Ajunta</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/12/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/moIYXZIF8xl0v4XL4im7JPS2nsGpiIStkp068sw9.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৩</span></li>
                <li class=""><span>Font Name: Akash</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/13/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/FQJWy8oflaxJMJrmZSYYWNh6d7ZgFmtUsqu8AvIU.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৪</span></li>
                <li class=""><span>Font Name: Agni</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: Bangla Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/14/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/7lXImq9CJCCTCLXeDP1h2HFkSj6JgMGIjkwR8OGH.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৫</span></li>
                <li class=""><span>Font Name: AceBinghamSH</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/15/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/RAF9rmHwTmqPzmrhmSJVT2hmyrOakOxjj1LpmNH2.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৬</span></li>
                <li class=""><span>Font Name: 28 Days Later</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/16/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/uOZYdZWs82zeJ21vg5GuDukJPK4qVmRBxBQViGQm.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৭</span></li>
                <li class=""><span>Font Name: 80 Decibels</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/17/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/W4pTL7Y0zs91qS93No8vWplT69mX0W17Zu9bl3OK.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৮</span></li>
                <li class=""><span>Font Name: 18thCentury</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/18/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/NUz25xO6sXzQmiKLpRfWdvPBUEKvgttgTcQpylZ5.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>১৯</span></li>
                <li class=""><span>Font Name: 200proofmoonshine</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/19/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/0S83HWAK8RG1yUxgjlGadfrhtwN3oxzJcoCQoKxo.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২০</span></li>
                <li class=""><span>Font Name: 20th Century</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/20/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/RdARa8xDESpc4kOKThffgdM3s63lj3EAcCHxNX5c.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২১</span></li>
                <li class=""><span>Font Name: 37 Kilobyte</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/21/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/4STzGKencjvzkPmuEqPuTwgLzpRN8Kbr2kg607sR.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২২</span></li>
                <li class=""><span>Font Name: 39 Smooth</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/22/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/B4qY7NRU39XE6vbfFosCiI39fub1OpJDXDA41ocf.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২৩</span></li>
                <li class=""><span>Font Name: 90 Days</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/23/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/Ipye6Td6FFlP0jFafHItvKkYv7ve06r49oZMQ1Vs.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২৪</span></li>
                <li class=""><span>Font Name: Yaquote Script</span></li>
                <li class=""><span>Version: Open Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/24/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                        <div class="border mb-2">
            <img src="https://amarseba.net/storage/necessary-fonts-image/W4J8bs3cFtcwfx4CtsgXuyQWpL2QRufBlxDi6CPz.png" class="w-100 h-auto rounded-0">
            <ol class="breadcrumb breadcrumb-arrow m-0">
                <li class="text-center"><span>২৫</span></li>
                <li class=""><span>Font Name: Abracadabra</span></li>
                <li class=""><span>Version: True Type</span></li>
                <li class="page_speed_1238037779"><span>Language: English Font</span></li>
                                                                                    <li class="active" onclick="download_file_action('https://amarseba.net/admin/service/necessary-fonts/25/download',' ৫')"><a href="#">ডাউনলোড করুন</a></li>
                                                                                                    </ol>
        </div>
                </div>

<div class="mt-5">
    <nav class="d-flex justify-items-center justify-content-between">
<div class="d-flex justify-content-between flex-fill d-sm-none">
<ul class="pagination">

                        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link">&laquo; Previous</span>
        </li>


                        <li class="page-item">
            <a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=2" rel="next">Next &raquo;</a>
        </li>
                </ul>
</div>

<div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
<div>
    <p class="small text-muted">
        Showing
        <span class="fw-semibold">1</span>
        to
        <span class="fw-semibold">25</span>
        of
        <span class="fw-semibold">104</span>
        results
    </p>
</div>

<div>
    <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>





                                                                                                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                                    <li class="page-item"><a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=2">2</a></li>
                                                                                                                    <li class="page-item"><a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=3">3</a></li>
                                                                                                                    <li class="page-item"><a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=4">4</a></li>
                                                                                                                    <li class="page-item"><a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=5">5</a></li>


                                <li class="page-item">
                <a class="page-link" href="https://amarseba.net/admin/service/necessary-fonts?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
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
@endsection
