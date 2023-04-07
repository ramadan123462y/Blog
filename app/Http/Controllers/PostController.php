<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    // 'title','body','image'
    public function store(Request $request){

            $path_name=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('postes',$path_name,'imges');

            Auth::user()->posts()->create([

            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$path_name

            ]);
            return redirect()->back()->with('msg',"تم اضافه المنشور بنجاح");



    }
    public function destroy($id){
            $post=Post::find($id);
            $path_name="imges/postes/".$post->image;
            if(file_exists($path_name)){

                unlink($path_name);

            }
            $post->delete();
            return redirect()->back()->with('msg3','تم حذف البوست بنجاح');

    }
    public function viewpost($id){

    $post=Post::find($id);
return view('frontend.blog-single',compact('post'));
    }




}
