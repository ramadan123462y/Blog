<?PHP

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/postes',function(){
return view('backend.postes');
});
Route::get('dashboard/users',function(){
return view('backend.users');
});
Route::get('dashboard/message',function(){
return view('backend.messeges');
});
Route::get('dashboard/profile',function(){
return view('backend.profile');
});
Route::get('dashboard/error',function(){
return view('backend.error');
});
Route::post('message/deletall',[MessageController::class,'deletall']);
Route::post('comment/destroy',[CommentController::class,'destroy']);
Route::post('user/store',[UserController::class,'store']);

Route::get('delete_user/{id}',[UserController::class,'delete_user']);
Route::post('post/store',[PostController::class,'store']);
Route::get('post/destroy/{id}',[PostController::class,'destroy']);



