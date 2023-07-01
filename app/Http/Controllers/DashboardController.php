<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;
use Auth;
use Validator;
class DashboardController extends Controller
{
    public function UserProfile()
    {
        return view('user.profile');
    }

    public function UserEditProfile()
    {
        return view('user.profile_update');
    }

    public function UserLogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function userProfileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'number' => 'required|numeric|digits:11|unique:users,number,'.Auth::id(),
        ]);
        if ($validator->fails()) {
            
           
            return redirect()->back()->with('error',$validator->messages());
        }
        $data = User::find(Auth::id());
        $data->name   = $request->name;
       // $data->username  = $request->username;
        $data->number  = $request->number;
        // $data->address = $request->address;
        // $data->dob= $request->dob;
        // $data->nid= $request->nid;
        // $data->centername= $request->centername;
        // $data->facebook= $request->facebook;
        // $data->twitter= $request->twitter;
        // $data->whasapp= $request->whasapp;

 // Upload Image
 if ($request->hasFile('image')) {
    $image_tmp = $request->file('image');
    if ($image_tmp->isValid()) {
        // Get image extension
        $extension = $image_tmp->getClientOriginalExtension();
        $imageName = rand(111,999).'.'.$extension;
        $imagePath = 'admin/images/user/'.$imageName;
        // Upload the imaage
        Image::make($image_tmp)->save($imagePath);
        $data->image = $imageName;
    }
    else{
       $data->image = "";
    }
}



        $data->save();

        $notification = array(
            'messege'=> "Successfully Updated !",
            'alert-type'=>'success'
        );
        return redirect()->route('user.profile')->with($notification);
    }
}
