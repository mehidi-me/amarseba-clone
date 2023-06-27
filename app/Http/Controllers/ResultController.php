<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use Image;
class ResultController extends Controller
{
    public function add()
    {
       return view('result.add');
    }

    public function store(Request $request)
    {
        $result = new Result();
        $result->name = $request->name;
        $result->email =$request->email;
        $result->number =$request->number;
        $result->father_name =$request->father_name;
        $result->mother_name =$request->mother_name;
        $result->address =$request->address;
        $result->gender =$request->gender;
        $result->code =$request->code;
        $result->register_no =$request->register_no;
        $result->session_year =$request->session_year;
        $result->grade =$request->grade;

     if($request->hasFile('image')){
       $image_tmp=$request->file('image');
        if($image_tmp->isValid()){
            $extension=$image_tmp->getClientOriginalExtension();
            $imageName=rand(111,99999).''.$extension;
            $imagePath='backend/result/'.$imageName;
            Image::make($image_tmp)->save($imagePath);
            $result->image=$imageName;
        }
            }
    $result->save();
    if ($result) {           
    $notification=array(
        'messege'=>'Result Added Successfully',
        'alert-type'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
    }


    public function index()
    {
        $results=Result::all();
        return view('result.index',compact('results'));
    }

    public function delete($id)
    {
        $delete = Result::find($id);
        $delete->delete();
         $notification=array(
              'messege'=>'Result Deleted Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        
        $result= Result::find($id);
         if (!is_null($result)) {
      return view('result.edit', compact('result'));
       }else {
      return resirect()->route('all.result');
       }
    }

    public function update(Request $request,$id)
    {
    $result = Result::find($id);
    $result->name = $request->name;
    $result->email =$request->email;
    $result->number =$request->number;
    $result->father_name =$request->father_name;
    $result->mother_name =$request->mother_name;
    $result->address =$request->address;
    $result->gender =$request->gender;
    $result->code =$request->code;
    $result->register_no =$request->register_no;
    $result->session_year =$request->session_year;
    $result->grade =$request->grade;

    if($request->hasFile('image')){
        $image_tmp=$request->file('image');
         if($image_tmp->isValid()){
             $extension=$image_tmp->getClientOriginalExtension();
             $imageName=rand(111,99999).''.$extension;
             $imagePath='backend/result/'.$imageName;
             Image::make($image_tmp)->save($imagePath);
             $result->image=$imageName;
         }
             }

    
          $result->save();
            if ($result) {           
            $notification=array(
              'messege'=>'Result Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('results')->with($notification);
       }
    }
}
