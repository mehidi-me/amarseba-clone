<div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="ti-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>
            Light
        </div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>
            Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
        </div>
    </div>
</div>
<div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
    </ul>
    <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                        <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                    </div>
                </form>
            </div>
            <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Team review meeting at 3.00 PM
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Prepare for presentation
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Resolve all the low priority tickets due today
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Schedule meeting for next week
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Project review
                            </label>
                        </div>
                        <i class="remove ti-close"></i>
                    </li>
                </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="{{asset('admin/images/faces/face1.jpg')}}" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('admin/images/faces/face2.jpg')}}" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <div class="wrapper d-flex">
                            <p>Catherine</p>
                        </div>
                        <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('admin/images/faces/face3.jpg')}}" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('admin/images/faces/face4.jpg')}}" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('admin/images/faces/face5.jpg')}}" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="{{asset('admin/images/faces/face6.jpg')}}" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- chat tab ends -->
    </div>
</div>
<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a @if(Session::get('page')=="dashboard") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" href="{{url('admin/dashboard')}}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if(Auth::guard('admin')->user()->type=="vendor")


            <li class="nav-item">
            <a @if(Session::get('page')=="update_personal_details" || Session::get('page')=="update_business_details" || Session::get('page')=="view_vendors" || Session::get('page')=="update_bank_details") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-vendor" aria-expanded="false" aria-controls="ui-vendor">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Vendor Details</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-vendor">
                <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                    <li class="nav-item"> <a @if(Session::get('page')=="update_personal_details") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/update-vendor-details/personal')}}">Personal Details</a></li>
                    <li class="nav-item"> <a @if(Session::get('page')=="update_business_details") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/update-vendor-details/business')}}">Business details</a></li>
                    <li class="nav-item"> <a @if(Session::get('page')=="update_bank_details") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/update-vendor-details/bank')}}">Bank details</a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a @if(Session::get('page')=="orders") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-orders" aria-expanded="false" aria-controls="ui-orders">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Order Management</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-orders">
                <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                    <li class="nav-item"> <a @if(Session::get('page')=="orders") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/orders')}}">Orders</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a @if(Session::get('page')=="products") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-catalogue" aria-expanded="false" aria-controls="ui-catalogue">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Catalogue Management</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-catalogue">
                <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                    <li class="nav-item"> <a @if(Session::get('page')=="products") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/products')}}">Products</a></li>
                    <li class="nav-item"> <a @if(Session::get('page')=="coupons") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/coupons')}}">Coupons</a></li>
                </ul>
            </div>
        </li>
        @else

        {{-- <li class="nav-item">
            <a @if(Session::get('page')=="orders") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-orders" aria-expanded="false" aria-controls="ui-orders">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Order Management</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-orders">
                <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                    <li class="nav-item"> <a @if(Session::get('page')=="orders") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/orders')}}">Orders</a></li>
                </ul>
            </div>
        </li> --}}


            <li class="nav-item">
                <a @if(Session::get('page')=="update_password" || Session::get('page')=="update_admin_details") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-setting" aria-expanded="false" aria-controls="ui-setting">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-setting">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="update_password") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/update-password')}}">Update Password</a></li>
                        <li class="nav-item"> <a @if(Session::get('page')=="update_admin_details") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/update-details')}}">Update details</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a @if(Session::get('page')=="categories" || Session::get('page')=="categories") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-setting">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Category </span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-category">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="add_category") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/add-edit-category') }}">Add Category</a></li>
                        <li class="nav-item"> <a @if(Session::get('page')=="categories") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/categories')}}">All Category</a></li>

                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a @if(Session::get('page')=="sheba" || Session::get('page')=="sheba") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-sheba" aria-expanded="false" aria-controls="ui-sheba">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Sheba  </span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-sheba">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="add_sheba") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{ url('admin/add-edit-sheba') }}">Add Sheba</a></li>
                        <li class="nav-item"> <a @if(Session::get('page')=="sheba") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/sheba')}}">All Sheba</a></li>

                    </ul>
                </div>
            </li>

          <li class="nav-item">
                <a @if(Session::get('page')=="users") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-users">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Users Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-users">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a  @if(Session::get('page')=="users") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/users')}}">Users</a></li>
                        {{-- <li class="nav-item"> <a  @if(Session::get('page')=="balances") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/balances')}}">Users Balance</a></li> --}}
                    </ul>
                </div>
            </li>


            {{-- <li class="nav-item">
                <a @if(Session::get('page')=="sections" || Session::get('page')=="categories" || Session::get('page')=="brands" || Session::get('page')=="products" || Session::get('page')=="view_all" || Session::get('page')=="filters") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-catalogue" aria-expanded="false" aria-controls="ui-catalogue">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Catalogue Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-catalogue">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="sections") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/sections')}}">Sections</a></li>
                        <li class="nav-item"> <a @if(Session::get('page')=="categories") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/categories')}}">Categories</a></li>

                        <li class="nav-item"> <a @if(Session::get('page')=="brands") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/brands')}}">brands</a></li>

                        <li class="nav-item"> <a @if(Session::get('page')=="products") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/products')}}">Products</a></li>

                         <li class="nav-item"> <a @if(Session::get('page')=="filters") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/filters')}}">Filters</a></li>
                         <li class="nav-item"> <a @if(Session::get('page')=="coupons") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/coupons')}}">Coupons</a></li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a @if(Session::get('page')=="users") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-users" aria-expanded="false" aria-controls="ui-users">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Users Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-users">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a  @if(Session::get('page')=="users") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/users')}}">Users</a></li>
                        <li class="nav-item"> <a  @if(Session::get('page')=="users") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/subscribers')}}">Subscribers</a></li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a @if(Session::get('page')=="banners") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-banners" aria-expanded="false" aria-controls="ui-banners">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Banners Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-banners">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="banners") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/banners')}}">Page Banners</a></li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a @if(Session::get('page')=="coupons") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-coupons" aria-expanded="false" aria-controls="ui-coupons">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Coupon Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-coupons">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="coupons") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/coupons')}}">Coupons</a></li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a @if(Session::get('page')=="cmspages") style="background: #4B49AC !important; color: #fff !important;" @endif class="nav-link" data-toggle="collapse" href="#ui-cmspages" aria-expanded="false" aria-controls="ui-banners">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Pages Management</span>
                <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-cmspages">
                    <ul class="nav flex-column sub-menu" style="background: #fff !important; color: #4B49AC !important;">
                        <li class="nav-item"> <a @if(Session::get('page')=="cmspages") style="background: #4B49AC !important; color: #fff !important;" @else style="background: #fff !important; color: #4B49AC !important;" @endif class="nav-link" href="{{url('admin/cmspages')}}">Cms Pages</a></li>
                    </ul>
                </div>
            </li> --}}

        @endif








    </ul>
</nav>
