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

    public function managesubcategory(Request $request)
    {
        $category_list = Subcategory::latest('created_at')->get();

        // if ($request->ajax()) {
        //     return view('admin.categoryload', ['category_list' => $category_list])->render();  
        // }

        return view('admin.managesubcategory', compact('category_list'));
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
    		'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:3000',
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

      public function edit($id){
     		$data['category_list']=Category::all();
    	$subcategory=Subcategory::find($id);
    	$data['category_name']=Category::where('id', '=', $subcategory->category_id)->first();
    	return view('admin.editsubcategory',$data)->with('subcategory',$subcategory);
    }

    public function update(Request $request){
    	$messages=array(
    		'category_name.required'=>'This category name is required',
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
    		$category=Subcategory::find($request->id);
    	
        $image=$request->image;
        if(empty($image)){
        	$category->category_name=$request->category_name;
	    	$category->short_name=strtolower($request->category_name);
	    	$category->category_id=$request->maincategory;

	    }else  if(!empty($image))
        {
        	$category->category_name=$request->category_name;
	    	$category->short_name=strtolower($request->category_name);
	    	$category->category_id=$request->maincategory;

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
            
        }	

	if($category->save()){
              return Response::json(['success' => '1','message' => 'Subcategory updated successfully']);

            }
            else {
              return Response::json(['success' => '0','message' => 'Something is wrong. Please try again.']);

            }
        }
    	


    }


    public function destroy($id){
    	$del=Subcategory::find($id);
    	if($del->delete()){
    		unlink(public_path().'/assets/subcategory/'.$del->image);
    		unlink(public_path().'/assets/subcategory/thumb/'.$del->image);
    		return Response::json(['success' => '1','message' => 'Subcategory deleted successfully']);
    	}else{
    		return Response::json(['success' => '1','message' => 'Subcategory not deleted']);
    	}
    }
}
