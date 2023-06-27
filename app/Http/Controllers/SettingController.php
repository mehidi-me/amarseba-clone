<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Image;
class SettingController extends Controller
{
    public function setting()
    {
     
        $userDetails=User::where('email',Auth::user()->email)->first();

        return view('profile',compact('userDetails'));
    }

    public function UpdateProfile(Request $request){
        $data=$request->all();
   //echo"<pre>";print_r($data); die();

         $data = User::find(Auth::user()->id);
         $data->name = $request->name;
         $data->email = $request->email;
         $data->number = $request->number;


         if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get image extension
                $extension = $image_tmp->getClientOriginalExtension();
                $imageName = rand(111,999).'.'.$extension;
                $imagePath = 'backend/user/'.$imageName;
                // Upload the imaage
                Image::make($image_tmp)->save($imagePath);
                $data->image = $imageName;
            }
            else{
               $data->image = ""; 
            }
        }

         //return response()->json($data);
        $data->save();
          if ($data) {           
          $notification=array(
            'messege'=>'Profile Update  Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
         }
}
}
