<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use File,Response,Redirect;
use App\Category;
use App\Subcategory;
class DynamicFieldsController extends Controller
{
    public function home(){
    	$data['category_list']=Category::all();
    	return view('admin.dynamicfield',$data);
    }

    public function getsubcategory(Request $request){
    	$id=$request->id;
    	$subcategory = Subcategory::where('category_id', $id)->get();
    	$html = '<option value="">Select Subcategory</option>';
        foreach ($subcategory as $category) {
            $html .= '<option value="'.$category->id.'">'.$category->category_name.'</option>';
        }
         return $html;

    }
}
