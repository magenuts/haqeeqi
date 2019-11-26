<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
class PostController extends Controller
{
    public function index(){
      $data['category_list']=Category::all();
      return view('frontend.post.post',$data);
    }

    public function subcategorylist(Request $request){
      $id= $request->id;
      $subcategory = Subcategory::where('category_id', $id)->get();
    	$html = '';
        foreach ($subcategory as $category) {
            $html .= '<a class="list-group-item list-group-item-action" href="postad/'.$id.'/'.$category->id.'">'.$category->category_name.'</a>';

        }
         return $html;
    }

    public function postad($maincategoryid,$subcategoryid){
      $data['maincategoryid']=$maincategoryid;
      $data['subcategoryid']=$subcategoryid;
        return view('frontend.post.adpost',$data);
    }

  
}
