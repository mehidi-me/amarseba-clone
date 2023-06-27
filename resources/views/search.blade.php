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
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
      <!-- CSS links start -->
      <link rel="stylesheet" href="{{ asset('frontend/vendor/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/media.css')}}">
      <link rel="stylesheet" href="{{ asset('frontend/css/media.css')}}">
      <!-- CSS links end -->
      <title></title>
      <link rel="icon" href="{{ asset('frontend/img/logo.png')}}">
   </head>
   <body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        @if(! $results->isEmpty())
        @foreach ($results as $result )
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{url('backend/result/'.$result->image)}}"><span class="font-weight-bold">{{ $result->name }}</span><span class="text-black-50">{{ $result->email }}</span><span> </span></div>
        </div>

      
            
     
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Student Profile </h4>
                </div>
         
                <div class="row mt-6">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        @endforeach
        @else
         <h3>Not Result</h3>
        @endif
    </div>
</div>
</div>
</div>
   <!-- JS links -->
      <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{ asset('frontend/vendor/css/all.min.js')}}"></script>
      <script src="{{ asset('frontend/js/bootstrap.min.js"')}}></script>
      <script src="{{ asset('frontend/js/script.js')}}"></script>
      <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
   </body>
</html>