<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function store(Request $request ){
       $name=$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('image_user',$name,'imges');
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'image'=>$name

        ]);

return redirect()->back()->with('susu','تم اضافه المستخدم بنجاح');
    }
    public function delete_user($id){
            $user=User::find($id);


$path="imges/image_user/".$user->image;
if(file_exists($path)){

    unlink($path);

}
if($user->id==Auth::user()->id){
    $user->delete();
return redirect('login');


}else{

    $user->delete();

    return redirect()->back()->with('dodo','تم حذف المستخدم بنجاح');

}

    }
}
