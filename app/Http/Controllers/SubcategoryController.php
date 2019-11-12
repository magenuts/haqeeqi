<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Image;
use Validator;
use File,Response,Redirect;
use App\Subcategory;
class SubcategoryController extends Controller
{
    public function index(){
    	$data['category_list']=Category::all();
    	return view('admin.subcategory',$data);
    }

    public function insert(Request $request){
    	$messages=array(
    		'maincategory.required'=>'This field is required',
    		'category_name.required'=>'This field is required',
    		'image.required'=>'This field is required',
    		'image.image'=>'Please select a image file',
    	);
    	$rules=array(
    		'maincategory'=>'required|string',
    		'category_name'=>'required|string|unique:subcategories',
    		'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    	);
    	$validator=\Validator::make($request->all(),$rules,$messages);
    	if($validator->fails()){
    		return Response::json(['success'=>'0','validation'=>'0','message'=>$validator->errors()]);
    	}
    	else{
    		$category=new Subcategory();
    	$category->category_name=$request->category_name;
    	$category->short_name=strtolower($request->category_name);
    		$category->category_id=$request->maincategory;
        $image=$request->image;
        if(!empty($image))
        {
          $destinationPath =public_path().'/assets/subcategory/';
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
              return Response::json(['success' => '1','message' => 'Subcategory added successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
    	}
    }
}
