<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{

public function store(Request $request){

Message::create([
'name'=>$request->name,
'email'=>$request->email,
'subject'=>$request->subject,
'message'=>$request->message,
]);
return redirect()->back()->with("msg","تم ارسال رسالتك بنجاح");
}
public function deletall(){

DB::table('messages')->delete();
return redirect()->back()->with("deletmessage"," تم حذف جميع الرسائل بنجاح");

}

}
