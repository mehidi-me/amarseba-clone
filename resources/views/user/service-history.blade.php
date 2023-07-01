@extends('user.user')

@section('user_content')
    <div class="page-content">
        <!-- start page title -->
        <div class="page-title-box pb-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="page-title text-capitalize">
                            <h4 class="breadcrumb-title">সেবার ইতিহাস</h4>




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
                                    <h4 class="">সেবার ইতিহাস</h4>
                                </div>
                                <div>
                                    <a href="{{ url('dashboard/service') }}"
                                        class="btn btn-success btn-rounded waves-effect waves-light">
                                        <i class="mdi mdi-reply"></i> পেছনে যান
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 page_speed_993479569">
                            <div class="row">
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive">
                                        <thead>
                                            <tr>
                                                <th>ক্রমিক নং</th>
                                                <th>সেবার নাম</th>
                                                <th>সেবার টাকা</th>
                                                <th>তারিখ</th>
                                                <th>একশন</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($histories as $history)
                                            @php
                                            $sheba = App\Models\Sheba::find($history->sheba_id);
                                            @endphp
                                            @if (!empty($sheba))
                                            <tr>
                                                <td> {{ $loop->iteration }}</td>
                                                <td>{{ $sheba->sheba_name }}</td>
                                                <td>{{ $sheba->sheba_price }}</td>
                                                <td>{{ $history->created_at }}</td>
                                                <td class="text-center p-2">

                                                    {{-- <a href="{{ url('dashboard/dawnload',$sheba->id) }}">
                                                        <i class="bx bx-download"></i>
                                                    </a> --}}
                                        
                                                    <a href="#" onclick="download_file_action('{{ url('dashboard/done/'.$sheba->id)}}',' {{ $sheba->sheba_price }}')">
                                                        <i class="bx bx-download"></i>
                                                     </a>
                                        
                                        
                                        
                                        
                                                  </td>
                                            </tr>
                                            @endif
                                                
                                            @endforeach

                                            {{-- <tr>
            <td colspan="8">
                <p class="text-muted text-center">কোনো তথ্য খুজে পাওয়া যায়নি..!</p>
            </td>
        </tr> --}}
                                        </tbody>
                                    </table>







                                    <div class="mt-5">

                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                {{-- <div class="modal fade" id="howToRecerge" tabindex="-1" aria-labelledby="howToRecergeLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content rounded-0">
<div class="modal-body p-0">
    <img src="https://amarseba.net/storage/setting/guNGY5XmQC5qAOmT94zl7NFu9A92YSYcsxooNSXB.png" class="w-100">
</div>
</div>
</div>
</div> --}}
            </div>
        </div>
    </div>
@endsection
