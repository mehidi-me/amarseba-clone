<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
      <!-- owl carusel  -->
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
      <!-- CSS links start -->
      <link rel="stylesheet" href="{{ asset('frontend/vendor/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/vendor/WOW-master/animate.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/tab.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/media.css')}}">
      <!-- CSS links end -->
      <title>Department of Youth Development-Government of the People\'s Republic of Bangladesh</title>
      <link rel="icon" href="img/logo.png">
   </head>
   <body>
      <!-- headert start -->
   <div class="container">
      <header>
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="container-fluid">
                  <div class="logo">
                     <a class="navbar-brand" href="index.html">Bangladesh National Portal</a>
                  </div>
                  <div class="office_type d-flex">
                     <select id="inputState" class="form-select">
                        <option selected> অফিসের ধরন</option>
                        <option>মন্ত্রনালয়/বিভাগ</option>
                        <option>অধিদপ্তর বাতায়ন</option>
                        <option>বিভাগীয় বাতায়ন</option>
                        <option>জেলা বাতায়ন</option>
                        <option>উপজেলা বাতায়ন</option>
                        <option>ইউনিয়ন বাতায়ন</option>
                        <option>অন্যান্য</option>
                     </select>

                   <button>Go</button>
                  </div>
                  <div class="h_divider"></div>
                     <form action="{{ url('result/search') }}" method="get" class="d-flex h_search">
                       <input class="form-control me-2" type="search" name="search" placeholder="Search Result" aria-label="Search">
                       <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  </div>
               </div>
            </nav>
      </header>
   </div>
      <!-- First header bottom start -->
      <!-- banner start -->
      <div class="container">
         <div style="height: 5px; background-color: #8CC24A;"></div>
         <div class="banner">
            <!-- slider start -->
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <!-- slider item start -->
                <div class="carousel-item active" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_1.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_2.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_3.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_4.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_5.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_6.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_7.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
                <!-- slider item start -->
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="{{ asset('frontend/img/slider_8.jpg')}}" class="img-fluid w-100" alt="image">
                </div>
                <!-- slider item end -->
              </div>
            </div>
            <!-- slider end -->
            <div class="banner_content d-flex">
               <div class="banner_img">
                  <a href="#"><img src="{{ asset('frontend/img/logo.png')}}" alt="logo" class="img-fluid"></a>
               </div>
               <div class="banner_text">
                  <a href="#"><h1>Department of Youth Development</h1></a>
                  <h5>Government of the People's Republic of Bangladesh</h5>
               </div>
            </div>
         </div>
      </div>
      <!-- banner end -->
      <!-- meanu start -->
      <div class="container">
         <div class="header_2">
            <!-- menu start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid px-0">
                <div class="logo_2">
                   <a class="navbar-brand" href="{{ url('/') }}"><span><i class="fa-solid fa-house-chimney"></i></span></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu_2">
                  <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_1">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_1">About Us</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <h3>Office Information</h3>
                               <a href="#">At a Galance</a>
                               <a href="#">Vision & Mission</a>
                               <a href="#">Former Heads of the Office</a>
                               <a href="#">Ex Officers</a>
                               <a href="#">Organogram</a>
                               <a href="#">Current Activities</a>
                               <a href="#">Future Plan</a>
                             </div>
                             <div class="column">
                               <h3>Human Resource</h3>
                               <a href="#">Head of the Office</a>
                               <a href="#">Officers</a>
                               <a href="#">Stuffs</a>
                               <a href="#">Designated Officer</a>
                             </div>
                             <div class="column">
                               <h3>Various List</h3>
                               <a href="#">Grameen Phone Number</a>
                               <a href="#">E-mail Address</a>
                               <a href="#">Digital Number</a>
                               <a href="#">GEO Code</a>
                             </div>
                             <div class="column">
                               <h3>Pulication</h3>
                               <a href="#">Annual Report 2018-2019</a>
                               <a href="#">Jubobarta Archive</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_2">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_2">our service</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <h3>Office Order</h3>
                               <a href="#">Transfer Order (Officer & Stuff)</a>
                               <a href="#">Leave (Officer & Stuff)</a>
                               <a href="#">GPF(Officer & Staff)</a>
                               <a href="#">NOC</a>
                               <a href="#">Recruitment Rule, 2012</a>
                               <a href="#">Manifesto-2018</a>
                             </div>
                             <div class="column">
                               <h3>Services</h3>
                               <a href="#">Service List</a>
                               <a href="#">How to get Services</a>
                               <a href="#">Citizen Charter</a>
                               <a href="#">Sebakunjo</a>
                               <a href="#">Blood Collection</a>
                             </div>
                             <div class="column">
                               <h3>Downloads</h3>
                               <a href="#">Rules</a>
                               <a href="#">Circular/Policies</a>
                               <a href="#">Brochure 2021</a>
                               <a href="#">Forms</a>
                               <a href="#">TeamViewer</a>
                               <a href="#">Any Desk</a>
                               <a href="#">Banner Maker</a>
                             </div>
                             <div class="column">
                               <h3>Annual Report</h3>
                               <a href="#">Annual Report 2018-2019</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_3">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_3">orders</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <h3>NOC</h3>
                               <a href="#">NOC</a>
                               <h3 class="mt-5">Pension</h3>
                               <a href="#">Pension Order</a>
                             </div>
                             <div class="column">
                               <h3>Office Order</h3>
                               <a href="#">Office Order</a>
                               <a href="#">Micro Credit</a>
                               <h3 class="mt-4">Leave</h3>
                               <a href="#">Overseas Leave</a>
                               <a href="#">Earn Leave</a>
                               <a href="#">Leave & Recreation</a>
                             </div>
                             <div class="column">
                               <h3>Transfer</h3>
                               <a href="#">Transfer Order</a>
                             </div>
                             <div class="column">
                               <h3>GPF</h3>
                               <a href="#">GPF</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_4">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_4">E-Service</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <h3>National E-Service</h3>
                               <a href="#">Nothi</a>
                               <a href="#">E-Mobile Court</a>
                               <a href="#">Land Services</a>
                               <a href="#">Bangladesh Forms</a>
                               <a href="#">Sebakunjo</a>
                               <a href="#">Online Application</a>
                               <a href="#">Inheritance Calculator</a>
                               <a href="#">E-Book</a>
                               <a href="#">E-Info Kosh</a>
                             </div>
                             <div class="column">
                               <h3>Mobile App</h3>
                               <a href="#">Nothi (Android)</a>
                               <a href="#">Nothi (IOS)</a>
                               <a href="#">Bangladesh Directory</a>
                               <a href="#">Bangladesh Tourist Spots (Android)</a>
                               <a href="#">Inheritance Calculator (Android)</a>
                             </div>
                             <div class="column">
                               <h3>e-larning</h3>
                               <a href="#">Fattening cattle</a>
                               <a href="#">Keeping Koyel in a small capital</a>
                               <a href="#"> Vermicompost</a>
                               <a href="#">Screen Print Training</a>
                               <a href="#">Pond Polyculture</a>
                               <a href="#">Cowhide Cutting</a>
                             </div>
                             <div class="column">
                               <h3>Adobe Tutorial(Bangla)</h3>
                               <a href="#">Adobe Photoshop</a>
                               <a href="#">Adobe Illustrator</a>
                               <a href="#">Adobe Premiere</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_5">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_5">Gallery</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <a href="#">Discipline </a>
                               <a href="#">Video Gallery</a>
                               <a href="#">Shahid Sheikh kamal</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_6">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_6">Training Video Content</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <h3>Computer Fundamental </h3>
                               <a href="#">Introduction & Types </a>
                               <a href="#">Input & Output</a>
                               <a href="#">Fundamental 1</a>
                               <a href="#">Fundamental 2</a>
                               <a href="#">Number System</a>
                             </div>
                             <div class="column">
                               <h3>Ms word</h3>
                               <a href="#">Class 6 Part 1</a>
                               <a href="#">Class 6 Part 2</a>
                               <a href="#">class 8</a>
                               <a href="#">class 9 Part 1</a>
                               <a href="#">class 9 Part 2</a>
                               <a href="#">class 10</a>
                             </div>
                             <div class="column">
                               <h3>Computer Assembling</h3>
                               <a href="#">Class 1</a>
                             </div>
                             <div class="column">
                               <h3>Operating system</h3>
                               <a href="#">OS Installation</a>
                             </div>
                              <div class="column">
                               <h3>Graphics Course</h3>
                               <a href="#">Class 01</a>
                               <a href="#">Class 02</a>
                               <a href="#">Class 03</a>
                               <a href="#">Class 04</a>
                               <a href="#">Class 05</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_7">
                      <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_7">Dyd Logo</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <a href="#">Dyd Logo </a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                    <!-- nav item start -->
                    <li class="nav-item menu_item menu_item_8">
                     <!-- megamenu start -->
                      <div class="mega_menu">
                         <a href="#" class="nav-link active dropbtn dbtn_8">Contact Us</a>
                         <div class="dropdown-content">
                           <div class="row">
                             <div class="column">
                               <a href="#">64 District Office </a>
                               <a href="#">E-Mail Address</a>
                               <a href="#">Official mail Login</a>
                               <a href="#">Department Address</a>
                             </div>
                           </div>
                         </div>
                      </div>
                     <!--  mega menu end -->
                     </li>
                    <!-- nav item end -->
                  </ul>
                </div>
              </div>
            </nav>
            <!-- menu end -->
         </div>
      </div>
      <!-- meanu end -->
      <!-- main body start -->
      <div class="container">
         <div class="row">
            <!-- body part left start -->
            <div class="col-lg-9">
               <!-- padma banner start -->
               <a href="#">
                  <div class="padma_banner">
                    <img src="{{ asset('frontend/img/padmabanner.jpeg')}}" alt="padma_banner" class="img-fluid">
                  </div>
               </a>
               <!-- padma banner end -->
               <!-- notice start -->
               <div class="notice">
                 <h4>Notice Board</h4>
                 <ul>
                   <li>
                     <span><i class="fa-solid fa-caret-right"></i></span><a href="#">জাতীয় যুব দিবস ২০২২ উপলক্ষ্যে প্রকাশনা সংগ্রহ।</a>
                   </li>
                   <li>
                     <span><i class="fa-solid fa-caret-right"></i></span><a href="#">জাতীয় যুব পুরষ্কার ২০২২ এর জন্য চূড়ান্তভাবে নির্বাচিত সফল আত্মকর্মী/যুব সংগঠক এর জাত...</a>
                   </li>
                   <li>
                     <span><i class="fa-solid fa-caret-right"></i></span><a href="#">নোটিশ (আগামী ৩১-১০-২০২২ খ্রি. তারিখ দুপুর ০২.০০ টায় ওসমানী স্মৃতি মিলনায়তনে এক মহড়া অ...</a>
                   </li>
                   <li>
                     <span><i class="fa-solid fa-caret-right"></i></span><a href="#">নোটিশ (আগামী ২৬/১০/২০২২ খ্রি. বেলা ২.৩০ মিনিটে ১ নভেম্বর জাতীয় যুবদিবস ২০২২ উদযাপন উপ...</a>
                   </li>
                   <li>
                     <span><i class="fa-solid fa-caret-right"></i></span><a href="#">বিজ্ঞপ্তি (০৩ সেপ্টেম্বর, ২০১৮ খ্রি. তারিখে নিয়োগপ্রাপ্ত ক্যাশিয়ারদের নিয়োগপত্রে নাম,...</a>
                   </li>
                 </ul>
                 <a class="n_all" href="#">All</a>
                 <img src="{{ asset('frontend/img/bg_notice_board.png')}}" alt="image" class="img-fluid">
               </div>
               <!-- notice end -->
               <!-- ticker start -->
                <div class="ticker">
                  <p class="mb-0"><caption>News:</caption></p>
                  <div class="vwrap"><div class="vmove">
                  <div class="vitem"><a href="#">গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের সম্মানিত সিনিয়র সচিব জনাব মো: আখতার হোসেন ০২ জুন ২০২১ তারিখে সিনিয়র সচিব পদে পদোন্নতিপ্রাপ্ত হন।</a></div>
                  <div class="vitem"><a href="#">যুব উন্নয়ন অধিদপ্তরের সকল কর্মকর্তা/কর্মচারীদের পক্ষ থেকে শুভেচ্ছা ও অভিনন্দন। (2021-06-02)</a></div>
                  <div class="vitem">News (2015-10-05)</div>
                  <div class="vitem">News (2015-10-31)</div>
                </div></div>
                  <a class="n_all" style="margin-bottom: 20px; text-align: right; position: absolute; top: -14px;right: 10px;" href="#">All</a>
                </div>
               <!-- ticker end -->
               <!-- body item start -->
               <div class="body_items">
                 <div class="row">
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Golden Jubilee of Independenceday</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_1.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">logo</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">flags</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Activities</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>About Us</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_2.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Officers</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Staffs</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Organogram</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Communication</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Services</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_3.jpg')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Service List</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">How to Get Services</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Citizen Charter</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Advise</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Govt. Order/Circular</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_4 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">All Office Orders</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Transfer Order (Officer & Staffs)</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Leave (Officer & Staffs)</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training Nomination</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Department Activities</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_5 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training Section</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Micro-Credit Section</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Implementation</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Planing Section</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>National Integrity Strategy</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_6 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"> Work Plan</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Reports</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Commette</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Notification/Office Order/Commette</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end --> 
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Citizen's Charter</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_7 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"> Citizen's Charter</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Focal Point/Monitoring Committee</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Report</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Law/Rule</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Performance Management</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_8 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Circular/Policy</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Agreements</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">APA Report</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">APMS</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Complain Management</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_9 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Anik & Appellate Officer</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Report</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Complain Through Online</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Law & Guideline</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Rights of Information</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_10 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Designated Officer & Appeal Authority</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Order, Committee & Reports</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Inf. Form</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Info Law & Rule</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Service Process Simplification</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_11 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Notification/Circular/Policy</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">SPS Manual</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">SPS List</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Online Youth Club Registration</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Innovation</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_12 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Innovation Team</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Meeting Resolution</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Annual Planning</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Innovation, Digital, SPS service list</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Micro Credit</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_13 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Loan digital passbahi</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Loan Report</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Forms</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Credit Manual</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Training Activities</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_14 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Online Training Application</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training Calender</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training Trade</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training Adminssion Form</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Notice/Circular</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_15 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Online Recruitment</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Admission Circular & Result</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Admission Circuler</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Foreign Advertisement</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Information & Publication</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_16 (2).png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Publication</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Memorandum of Understanding</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Jubo Barta Archive</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Publications</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Laws & Rules</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_17.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Law</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Rules</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Circular/Policy</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Guard File</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Portals</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_18.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Ministry Portal</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">District & Upazila Office Portals</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">shnydi Portal</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">CHRDC Portal</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>National Service Programme</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_19.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Rules</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Syllabus & Modules</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Achievements</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Video & Others Matter</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Application Software</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_20.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">E-Service Practice</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"></a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"></a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"></a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Budget</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_21.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Revenue Budget</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Project Budget</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">ন্যাশনাল সার্ভিস কর্মসূচী</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Annual Procurement Plan</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>Invitation For Tender</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_22.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Open Tender Method</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">e-Tender</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"></a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#"></a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                   <!-- body item start -->
                   <div class="col-md-6">
                     <div class="b_item">
                       <h4>proofs of APA</h4>
                       <div class="d-flex">
                         <div class="bi_img">
                           <img src="{{ asset('frontend/img/bi_23.png')}}" alt="image" class="img-fluid">
                         </div>
                         <div class="bi_text">
                           <ul>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Training</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Credit</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Implementation</a></li>
                             <li><span><i class="fa-solid fa-caret-right"></i></span><a href="#">Missci</a></li>
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- body item end -->
                 </div>
               </div>
               <!-- body item end -->
               <!-- videos start -->
               <div class="videos">
                 <div class="v_title">
                   <h6>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h6>
                 </div>
                 <div class="row">
                     <!-- video item start -->
                     <div class="col-md-4">
                       <div class="video">
                         <iframe style="width: 100%;" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                     <!-- video item end -->
                    <!-- video item start -->
                     <div class="col-md-4 px-0 vp_0">
                       <div class="video">
                         <iframe style="width: 100%;" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                     <!-- video item end -->
                     <!-- video item start -->
                     <div class="col-md-4">
                       <div class="video">
                         <iframe width="100%" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                     </div>
                     <!-- video item end -->
                   </div>
               </div>
               <!-- videos end -->
               <!-- videos start -->
               <div class="videos">
                 <div class="v_title">
                   <h6>Others Video</h6>
                 </div>
                 <div class="row">
                  <!-- video item start -->
                  <div class="col-md-6">
                    <div class="video">
                      <iframe width="100%" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <p>Fall Armyworm Scouting and Identification</p>
                    </div>
                  </div>
                  <!-- video item end -->
                  <!-- video item start -->
                  <div class="col-md-6">
                    <div class="video">
                      <iframe width="100%" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <p>What to do during floods</p>
                    </div>
                  </div>
                  <!-- video item end -->
                 </div>
               </div>
               <!-- videos end -->
            </div>
            <!-- body part left end -->

            <!-- body part right start -->
            <div class="col-lg-3">
               <div class="body_right">
                 <!-- minster items start -->
                 <div class="minister">
                   <div class="min_title">
                     <h6>State Minister</h6>
                   </div>
                   <div class="min_img">
                     <img src="{{ asset('frontend/img/Md. Zahid Ahsan Russel.jpg') }}" alt="Md. Zahid Ahsan Russel" class="img-fluid">
                   </div>
                   <div class="min_text">
                      <h6>Mr. Md. Zahid Ahsan</h6>
                      <p>Russel  MP</p>
                      <p>State Minister</p>
                      <p>Ministry of Youth and Sports</p>
                   </div>
                 </div>
                 <!-- minster items end -->
                 <!-- minster items start -->
                 <div class="minister">
                   <div class="min_title">
                     <h6>Secretary</h6>
                   </div>
                   <div class="min_img">
                     <img src="{{ asset('frontend/img/min_2.jpg') }}" alt="Md. Zahid Ahsan Russel" class="img-fluid">
                   </div>
                   <div class="min_text">
                      <h6>Mesbah Uddin</h6>
                      <p>Secretary</p>
                      <p>Ministry of Youth and Sports</p>
                   </div>
                 </div>
                 <!-- minster items end -->
                 <!-- minster items start -->
                 <div class="minister">
                   <div class="min_title">
                     <h6>Director General</h6>
                   </div>
                   <div class="min_img dir_img">
                     <img src="{{ asset('frontend/img/min_3.jpg')}}" alt="Md. Zahid Ahsan Russel" class="img-fluid">
                   </div>
                   <div class="min_text">
                      <h6>Md. Azharul Islam Khan</h6>
                      <p>Director General (Grade-1)</p>
                   </div>
                 </div>
                 <!-- minster items end -->
                 <!-- body right links start -->
                 <div class="br_links">
                   <a href="#"><div class="br_tittle">
                     <h5>Internal eServices</h5>
                   </div></a>
                   <div class="bl_item">
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Loan E-Service</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">National Service Program</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Personal Data Sheet</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Online Youth Club Registration</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Facebook Page of DYD</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Blog of DYD</a></p>
                   </div>
                   <button class="w-100"><a href="#">All Links</a></button>
                   <a href="#">
                      <div class="min_title"style="margin: 10px 0 20px !important;">
                        <h6>Central E-Service</h6>
                      </div>
                   </a>
                 </div>
                 <!-- body right links end -->
                 <!-- body right links start -->
                 <div class="br_links">
                      <div class="min_title">
                        <h6>Important Links</h6>
                      </div>
                   <div class="bl_item">
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Bangladesh Awami League Manifesto-2018</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">public Service</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">SHNYI</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Finance Ministry</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Ministry of Public Administration</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Ministry of Youth & Sports</a></p>
                   </div>
                   <button class="w-100"><a href="#">All Links</a></button>
                    <div class="min_title">
                      <h6>Hit Counter (From 31/12/19)</h6>
                    </div>
                    <div class="min_title">
                      <h6>Bongobondhu National Youthday-2020</h6>
                    </div>
                    <div class="video">
                      <iframe width="100%" height="140" src="https://www.youube.com/embed/dG8DRBH5FGw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="min_title">
                      <h6>National Anthem</h6>
                    </div>
                    <audio controls src="{{ asset('frontend/img/bd_national_anthem.mp3')}}" type="audio/mp3"></audio>
                    
                    <!-- sheikh russel img start -->
                    <div class="sr_img">
                      <div class="min_title">
                      <h6>Sheikh Russell Online Quiz Competition</h6>
                    </div>
                      <img src="{{ asset('frontend/img/sheikh-russel-quiz-fb-post-21.jpg')}}" alt="sheikh-russel-quiz" class="img-fluid">
                      <img style="margin: 20px 0 0;" src="{{ asset('frontend/img/2022-09-05-08-19-e63e01328af2c522c45d02d1344619b0.jpg')}}" alt="image" class="img-fluid">
                      <div class="min_title">
                      <h6>Sheikh Russell Online Quiz Competition</h6>
                    </div>
                    </div>
                    <!-- Emergency Hotline start -->
                    <div class="Ehotline">
                      <div class="min_title">
                        <h6>Emergency Hotline</h6>
                      </div>
                      <img src="{{ asset('frontend/img/2020-01-29-15-38-1110062e77cba2e7d935d46121912483.jpg')}}" alt="image" class="img-fluid">
                      <br>
                      <img src="{{ asset('frontend/img/2021-06-21-06-11-e595c58379d94825907bacc53dd97858.jpeg')}}" alt="image" class="img-fluid mt-2">
                    </div>
                    <!-- Emergency Hotline end -->
                    <!-- sheikh russel img end -->
                    <!-- Service Simplification start -->
                    <a href="#">
                      <div class="min_title">
                        <h6>Service Simplification</h6>
                      </div>
                    </a>
                    <div class="min_title">
                      <h6>Innovation Corner</h6>
                    </div>
                    <div class="bl_item">
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Innovation Team</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Resulation</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Innovative Idea</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Digital Service</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Yearly Inno Planning</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Innovation Best Practice Show-Casing</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">List of Participants</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Recognition</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Piloting Projects</a></p>
                     <p><span><i class="fa-solid fa-circle-check"></i></span><a href="#">Mentor</a></p>
                   </div>
                    <div class="min_title">
                      <h6>Social Media</h6>
                    </div>
                    <div class="br_social">
                      <ul class="list-inline">
                      <li class="list-inline-item"><a href="#"><span><i class="fa-brands fa-facebook"></i></span></a></li>
                      <li class="list-inline-item"><a href="#"><span style="color: red;"><i class="fa-brands fa-youtube"></i></span></a></li>
                    </ul>
                    </div>
                    <!-- Service Simplification end -->
                 </div>
                 <!-- body right links end -->
               </div>
            </div>
            <!-- body part right end -->
         </div>
      </div>
      <!-- main body end -->
      <!-- footer start -->
      <div class="container p0">
        <div class="footer_bg">
        </div>
      </div>
      <div class="container p0">
        <footer class="align-items-center">
        <div class="f_left">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">At a Glance</a></li>
            <li class="list-inline-item"><a href="#">FAQ</a></li>
          </ul>
          <p>Site was last updated: <i>2022-10-28 08:33:10</i></p>
        </div>
        <div class="f_right">
          <ul class="list-inline">
            <li class="list-inline-item"><p>Planning and Implementation</p></li>
            <li class="list-inline-item"><a href="#"> Cabinet Division,</a></li>
            <li class="list-inline-item"><a href="#">a2i,</a></li>
            <li class="list-inline-item"><a href="#">BCC,</a></li>
            <li class="list-inline-item"><a href="#"> DOICT,</a></li>
            <li class="list-inline-item"><a href="#">BASIS</a></li>
          </ul>
          <span>Technical Support:</span>
          <img src="{{ asset('frontend/img/np-logo-set.png')}}" alt="image" class="img-fluid">
        </div>
      </footer>
      </div>
      <!-- footer end -->
      <!-- side icon start -->
      <div class="side_icon">
        <div class="si si_1">
          <span><i class="fa-solid fa-chart-simple"></i></span>
        </div>
        <div class="si si_2">
          <span><i class="fa-solid fa-message"></i></span>
        </div>
        <div class="si si_3">
          <span><i class="fa-solid fa-universal-access"></i></span>
        </div>
      </div>
      <!-- side icon end -->
      <!-- JS links -->
      <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{ asset('frontend/vendor/css/all.min.js')}}"></script>
      <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('frontend/js/script.js')}}"></script>
   </body>
</html>