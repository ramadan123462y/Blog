<?PHP

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
return view('frontend.index');
});
Route::get('/blog',function(){
return view('frontend.blog');
});
Route::get('/blog-single',function(){
return view('frontend.blog-single');
});
Route::post('message/store',[MessageController::class,'store']);
Route::get('viewpost/{id}',[PostController::class,'viewpost']);
Route::post('comment/store/{id}',[CommentController::class,'store']);
