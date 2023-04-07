<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store( Request $request,$id){
        $post=Post::find($id);
        $post->comments()->create([
            'name'=>$request->name,
            'comment'=>$request->comment

        ]);
        return redirect()->back()->with('msg_addcomment',"تم اضافه الكومنت بنجاح");


    }
    public function destroy(){
        DB::table('comments')->delete();

        return redirect()->back()->with("deletcomment"," تم حذف جميع الكومنت بنجاح");

    }
}
