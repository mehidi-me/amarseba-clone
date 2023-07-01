<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Recharge;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use Image;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            //$data = $request->all();
            $check=$request->all();

            //echo "<pre>"; print_r($data); die();

            $rules = [
                'email'=>'required|email|max:255',
                'password'=>'required'
            ];

            $customMessages = [
                'email.required' => 'Email required',
                'email.email' => 'Valid Email required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request,$rules,$customMessages);

            if (Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password'],'status'=>1])) {
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message','Invalid email or password');
            }




        }
        return view('admin/login');

    }

    public function dashboard()
    {
        Session::put('page','dashboard');
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function updatePassword(Request $request)
    {
        Session::put('page','update_password');
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Hash::check($data['current_password'],Auth::guard('admin')->user()->password)) {
                // check if new and confirm password is matching
                if ($data['new_password']==$data['confirm_password']) {
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                      return redirect()->back()->with('success_message','Password has been updated successfully!');
                }else{
                     return redirect()->back()->with('error_message','New password and Confirm Password does not match!');
                }
            }else{
                 return redirect()->back()->with('error_message','Your current password is Incorrect');
            }
        }

        $adminDetails = Admin::where('email',Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.setting.update_password',compact('adminDetails'));
    }

    public function checkAdminPassword(Request $request)
    {
        $data = $request->all();
        //echo "<pre>"; print_r($data); die();
         //echo "<pre>"; print_r(Auth::guard('admin')->user()->password);die;
         if (Hash::check($data['current_password'],Auth::guard('admin')->user()->password)) {
             echo "true";
         }else{
            echo "false";
         }

    }

    public function updateAdminDetails(Request $request)
    {
        Session::put('page','update_admin_details');
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die();
            // admin details update

            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric'
            ];

            $customMessages = [
                'name.required' => 'Name required',
                'name.regex' => 'Valid Name is required',
                'mobile.required' => 'Mobile is required',
                'mobile.numeric' => 'Valid Mobile is required',
            ];

            $this->validate($request,$rules,$customMessages);

             // Upload Image
            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,999).'.'.$extension;
                    $imagePath = 'admin/images/photos/'.$imageName;
                    Image::make($image_tmp)->save($imagePath);
                }else if(!empty($data['current_image'])){
                    $imageName = $data['current_image'];
                }else{
                   $imageName = "";
                }
            }
            // Update admin details

            Admin::where('id',Auth::guard('admin')->user()->id)->update(['name'=>$data['name'],'mobile'=>$data['mobile'],'image'=>$imageName]);
            return redirect()->back()->with('success_message','Admin details update successfully!');
        }

        return view('admin.setting.update_admin_details');
    }



      public function Uers()
      {
        Session::put('page','users');
        $users = User::all();

        return view('admin.user.users',compact('users'));
      }

      public function deleteUser($id)
      {
          User::where('id',$id)->delete();
          $message = "User has been deleted successfully!";
          return redirect()->back()->with('success_message',$message);
      }


      public function addEditUser(Request $request,$id=null)
      {
          Session::put('page','add_sheba');
          if ($id=="") {
              $title = "Add User";
              $user = new User;
              $message = "User added Successfully!";
          }else{
              $title = "Edit Sheba";
              $user = User::find($id);
              $message = "User added Successfully!";
          }

          if ($request->isMethod('post')){
              $data = $request->all();
              //echo "<pre>"; print_r($data); die();

               $rules = [
                      'name' => 'required',
                      'number' => 'required',
                      'username' => 'required',
                      'dob' => 'required',

                  ];

                  $customMessages = [
                      'name.required' => 'User Name is required',
                      'number.required' => 'User Number is required',
                      'username.required' => 'UserName Name is required',
                      'dob.required' => 'Date Of Birth is required',

                  ];

                  $this->validate($request,$rules,$customMessages);


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
                              $user->image = $imageName;
                          }
                          else{
                             $user->image = "";
                          }
                      }







                      $user->name = $data['name'];
                      $user->number = $data['number'];
                      $user->username = $data['username'];
                      $user->dob = $data['dob'];
                      $user->address = $data['address'];
                      $user->nid = $data['nid'];
                      $user->centername = $data['centername'];
                      $user->facebook = $data['facebook'];
                      $user->twitter = $data['twitter'];
                      $user->whasapp = $data['whasapp'];
                      $user->balance = $data['balance'];
                      $user->save();
                      return redirect('admin/users')->with('success_message',$message);


          }



          return view('admin.user.add_edit_user')->with(compact('title','user'));
      }


      public function AddBalance($id)
    {
        $user = User::with('recharges')->find($id);

        return view('admin.user.add_balance',compact('user'));
    }


    public function AddBStore(Request $request)
    {
        $recharge=new Recharge();
        $recharge->user_id = $request->user_id;
        $recharge->amount_total = $request->amount_total;
        $recharge->amount_bonus = $request->amount_total;
        $recharge->status = 2;
        $recharge->type = 'Admin';




       

       $recharge->save();
       User::where('id',Auth::id())->increment('balance', $request->amount_total);
       $message = "Balance has been update successfully!";
       return redirect()->back()->with('success_message',$message);
    }



    public function BalanceDelete($id)
    {
        Recharge::where('id',$id)->delete();
        $message = "Recharge has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);
    }

      public function balances()
      {
        Session::put('page','balances');
        $balances = Recharge::all();

        return view('admin.user.balances',compact('balances'));
      }


}
