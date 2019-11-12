<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Validator;
use File,Response,Redirect;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category');
    }

    public function managecategory(Request $request)
    {
        $category_list = Category::latest('created_at')->get();

        // if ($request->ajax()) {
        //     return view('admin.categoryload', ['category_list' => $category_list])->render();  
        // }

        return view('admin.managecategory', compact('category_list'));
    }




    public function addcategory(Request $request){

    	$messages=array(
    		'category_name.required'=>'This field is required',
    		'image.required'=>'This field is required',
    		'image.image'=>'Please select a image file',
    	);
    	$rules=array(
    		'category_name'=>'required|string|unique:categories',
    		'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    	);
    	$validator=\Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}
    	else{
    		$category=new Category();
    	$category->category_name=$request->category_name;
    	$category->short_name=strtolower($request->category_name);
        $image=$request->image;
        if(!empty($image))
        {
          $destinationPath =public_path().'/assets/category/';
          if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
          }
        $filename           = time().$image->getClientOriginalName();

        $image->move($destinationPath, $filename);
        $img = Image::make($destinationPath.$filename);
        $img->resize(250, 250,
          function ($constraint) {
            $constraint->aspectRatio();
          });
          if (!file_exists($destinationPath.'thumb/')) {
            mkdir($destinationPath.'thumb/', 0777, true);
          }
          $img->save($destinationPath.'/thumb/'.$filename);
          $category->image=$filename;
            if($category->save()){
              return Response::json(['success' => '1','message' => 'Category added successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
    	}
    	
    
    }

    public function edit($id){
    	$data['category']=Category::find($id);
    	return view('admin.editcategory',$data);
    }

    public function update(Request $request){
    	$messages=array(
    		'category_name.required'=>'This field is required',
    		// 'image.required'=>'This field is required',
    		'image.image'=>'Please select a image file',
    	);
    	$rules=array(
    		'category_name'=>'required|string',
    		'image'=> 'image|mimes:jpg,png,jpeg,svg,gif|max:10000',
    	);
    	$validator=\Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}else{
    		$category=Category::find($request->id);
    	
        $image=$request->image;
        if(empty($image)){
        	$category->category_name=$request->category_name;
	    	$category->short_name=strtolower($request->category_name);
	    }else  if(!empty($image))
        {
        	$category->category_name=$request->category_name;
	    	$category->short_name=strtolower($request->category_name);
          $destinationPath =public_path().'/assets/category/';
          if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
          }
        $filename           = time().$image->getClientOriginalName();

        $image->move($destinationPath, $filename);
        $img = Image::make($destinationPath.$filename);
        $img->resize(250, 250,
          function ($constraint) {
            $constraint->aspectRatio();
          });
          if (!file_exists($destinationPath.'thumb/')) {
            mkdir($destinationPath.'thumb/', 0777, true);
          }
          $img->save($destinationPath.'/thumb/'.$filename);
          $category->image=$filename;
            
        }	

	if($category->save()){
       //      	unlink(public_path().'/assets/category/'.$category->image);
    			// unlink(public_path().'/assets/category/thumb/'.$category->image);

              return Response::json(['success' => '1','message' => 'Category updated successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
    	


    }
    public function destroy($id){

    	$del=Category::find($id);
    	if($del->delete()){
    		unlink(public_path().'/assets/category/'.$del->image);
    		unlink(public_path().'/assets/category/thumb/'.$del->image);

    		return Redirect::to('admin/managecategory')->with('deletecategory','Category has been deleted');
    	}else{
    		return Redirect::to('admin/managecategory')->with('deletecategory','Category not deleted');
    	}
    }
}
