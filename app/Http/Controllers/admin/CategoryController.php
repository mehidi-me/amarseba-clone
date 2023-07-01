<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use Session;
class CategoryController extends Controller
{
    public function categories()
    {
        Session::put('page','categories');
        $categories = Category::all();
      return view('admin.category.categories',compact('categories'));
    }

    public function addEditCategory(Request $request,$id=null)
    {
        Session::put('page','add_category');
        if ($id=="") {
            $title = "Add Category";
            $category = new Category;
            $message = "Category added Successfully!";
        }else{
            $title = "Edit Category";
            $category = Category::find($id);
            $message = "Category added Successfully!";
        }

        if ($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die();

             $rules = [
                    'category_name' => 'required',
                    'category_style' => 'required',

                ];

                $customMessages = [
                    'category_name.required' => 'Category Name is required',
                    'category_style.required' => 'Category Section is required',

                ];

                $this->validate($request,$rules,$customMessages);


                   // Upload Image
                    if ($request->hasFile('category_image')) {
                        $image_tmp = $request->file('category_image');
                        if ($image_tmp->isValid()) {
                            // Get image extension
                            $extension = $image_tmp->getClientOriginalExtension();
                            $imageName = rand(111,999).'.'.$extension;
                            $imagePath = 'admin/images/category_image/'.$imageName;
                            // Upload the imaage
                            Image::make($image_tmp)->save($imagePath);
                            $category->category_image = $imageName;
                        }
                        else{
                           $category->category_image = "";
                        }
                    }


                    $category->category_name = $data['category_name'];
                    $category->category_style = $data['category_style'];
                    $category->desc = $data['desc'];
                    if(!empty($request->price)){
                        $category->price = $data['price'];
                    }
                    if(!empty($request->full_link)){
                        $category->full_link = $data['full_link'];
                    }else{
                        $category->full_link = null;
                    }
                    $category->save();
                    return redirect('admin/categories')->with('success_message',$message);

        }

        // Get all Setions

        return view('admin.category.add_edit_category')->with(compact('title','category'));
    }

    public function deleteCategory($id)
    {
        Category::where('id',$id)->delete();
        $message = "Category has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);
    }

    public function deleteCategoryImage($id)
    {
        //Get category image
        $categoryImage = Category::select('category_image')->where('id',$id)->first();
        // Get category path
        $category_image_path = 'admin/images/category_image';
        // Delete category image form category_image folder if exists
        if (file_exists($category_image_path.$categoryImage->category_image)) {
            unlink($category_image_path.$categoryImage->category_image);
        }
        // delete image from categories folder
        Category::where('id',$id)->update(['category_image'=>'']);
         $message = "Category has been deleted successfully!";
         return redirect()->back()->with('success_message',$message);
    }
}
