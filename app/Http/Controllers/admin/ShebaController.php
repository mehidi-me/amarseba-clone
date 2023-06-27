<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Sheba;
use Image;
use Session;
class ShebaController extends Controller
{
    public function sheba()
    {
        Session::put('page','sheba');
        $shebas = Sheba::all();
      return view('admin.sheba.sheba',compact('shebas'));
    }

    public function addEditSheba(Request $request,$id=null)
    {
        Session::put('page','add_sheba');
        if ($id=="") {
            $title = "Add Sheba";
            $sheba = new Sheba;
            $message = "Sheba added Successfully!";
        }else{
            $title = "Edit Sheba";
            $sheba = Sheba::find($id);
            $message = "Sheba added Successfully!";
        }

        if ($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die();

             $rules = [
                    'sheba_name' => 'required',
                    'shabe_version' => 'required',
                    'category_id' => 'required',
                    'sheba_price' => 'required',

                ];

                $customMessages = [
                    'sheba_name.required' => 'Sheba Name is required',
                    'shabe_version.required' => 'Sheba Version is required',
                    'category_id.required' => 'Category Name is required',
                    'sheba_price.required' => 'Sheba Price is required',

                ];

                $this->validate($request,$rules,$customMessages);


                   // Upload Image
                    if ($request->hasFile('sheba_image')) {
                        $image_tmp = $request->file('sheba_image');
                        if ($image_tmp->isValid()) {
                            // Get image extension
                            $extension = $image_tmp->getClientOriginalExtension();
                            $imageName = rand(111,999).'.'.$extension;
                            $imagePath = 'admin/images/sheba_image/'.$imageName;
                            // Upload the imaage
                            Image::make($image_tmp)->save($imagePath);
                            $sheba->sheba_image = $imageName;
                        }
                        else{
                           $sheba->sheba_image = "";
                        }
                    }

                    // Upload PDF
                        if ($request->hasFile('file')) {
                        $pdf_tmp = $request->file('file');
                        if ($pdf_tmp->isValid()) {
                            // Get PDF extension
                            $extension = $pdf_tmp->getClientOriginalExtension();
                            $pdfName = rand(111, 999) . '.' . $extension;
                            $pdfPath = 'admin/pdf/sheba_file/' . $pdfName;
                            // Upload the PDF file
                            $pdf_tmp->move(public_path('admin/pdf/sheba_file/'), $pdfName);
                            $sheba->file = $pdfName;
                        } else {
                            $sheba->file = "";
                        }
                        }








                    $sheba->sheba_name = $data['sheba_name'];
                    $sheba->shabe_version = $data['shabe_version'];
                    $sheba->category_id = $data['category_id'];
                    $sheba->sheba_price = $data['sheba_price'];
                    $sheba->save();
                    return redirect('admin/sheba')->with('success_message',$message);

        }

        // Get all Setions
        $categories = Category::get()->toArray();

        return view('admin.sheba.add_edit_sheba')->with(compact('title','sheba','categories'));
    }

    public function deleteSheba($id)
    {
        Sheba::where('id',$id)->delete();
        $message = "Sheba has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);
    }

    public function deleteShebaImage($id)
    {
        //Get category image
        $categoryImage = Sheba::select('category_image')->where('id',$id)->first();
        // Get category path
        $category_image_path = 'admin/images/category_image';
        // Delete category image form category_image folder if exists
        if (file_exists($category_image_path.$categoryImage->category_image)) {
            unlink($category_image_path.$categoryImage->category_image);
        }
        // delete image from categories folder
        Sheba::where('id',$id)->update(['category_image'=>'']);
         $message = "Sheba has been deleted successfully!";
         return redirect()->back()->with('success_message',$message);
    }
}

