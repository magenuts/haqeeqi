<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Post;
use App\PostMedia;
use App\PostLocation;
use Validator;
use File,Response,Redirect;
use Image;
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
      $maincategory=$maincategoryid;
      $subcategory=$subcategoryid;
      $data['maincategory']=Category::where('id',$maincategory)->first();
      $data['subcategory']=Subcategory::where('id',$subcategory)->first();
      return view('frontend.post.adpost',$data);
    }

    public function submitpost(Request $request){
        $post=new Post();
        $post->maincategory_id=$request->maincategoryid;
        $post->subcategpry_id=$request->subcategoryid;
        $post->product_condition=$request->condition;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->price=$request->price;
        $post->userid='1';
        $submit=$post->save();
        if($submit){
          $postlocation=new PostLocation();
          $postlocation->postid=$post->id;
          $postlocation->location=$request->location;
          $postlocation->country=$request->country;
          $postlocation->state=$request->state;
          $postlocation->city=$request->city;
          $postlocation->latitude=$request->latitude;
          $postlocation->longitude=$request->longitude;
          if($postlocation->save())
          {
            $postmedia=new PostMedia();
            $postmedia->postid=$post->id;

            if($request->hasfile('filename'))
            {
            foreach ($request->file('filename') as $image)
            {

                $destinationPath =public_path().'/assets/posts/media/images/';
                if (!file_exists($destinationPath)) {
                  mkdir($destinationPath, 0777, true);
                }
                $filename           = time().$image->getClientOriginalName();

                $image->move($destinationPath, $filename);

                $img = Image::make($destinationPath.$filename);
                 // dd("success");

                $img->resize(150,150,
                  function ($constraint) {
                    $constraint->aspectRatio();
                  });
                  if (!file_exists($destinationPath.'thumb/')) {
                    mkdir($destinationPath.'thumb/', 0777, true);
                  }
                  $thumbimage=$destinationPath.'thumb/'.$filename;
                  $img->save($destinationPath.'/thumb/'.$filename);
                  $files[]=$filename;
                  $thumbfiles[]=$thumbimage;
                }
                  // dd($images);
                // dd($filename);
                  $postmedia->images=implode("|",$files);
                  $postmedia->thumbimages=implode("|",$thumbfiles);
                  if($postmedia->save())
                  {
                    return redirect('/')->with('post_success','Post added Successfully. Once it approves it will be activated on site');
                  }
                  else{
                    return "Post media not added";
                  }




        }
        }
        else{
          return "Post Location not added";
        }

    }
    else{
      return "Post Not Added";
    }




}
}
