<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\condidatController;
use App\Http\Controllers\newController;
use App\Http\Controllers\ProfileController;
use App\Models\News;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware('auth')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::delete('admin/delete-condidat/{id}',[condidatController::class,'delete']);
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('/admin/panel',[AdminController::class,'adminPanel']);
    Route::get('/admin/condidat/inscription',[AdminController::class,'index']);
    Route::get('admin/news',function (){
        return view('admin.news');
    });
    Route::post('admin/news/post',[newController::class,'PostNews']);
});
Route::get('/',function (){
    $news = News::orderBy('created_at','DESC')->limit(5)->get();
    return view('Home',compact('news'));
});
Route::get('home',function (){
    $news = News::orderBy('created_at','DESC')->limit(5)->get();
    return view('Home',compact('news'));
});
Route::post('download-pdf/{numDossier}',[condidatController::class,'pdfCondidat']);
Route::get('download-pdf/{numDossier}',function ($numDossier){
    return back();
});
Route::get('awrach-inscription',[condidatController::class,'index']);
Route::post('awrach-inscription',[condidatController::class,'store'])->name('awrach-inscription');

Route::get('changelang/{langue}',function ($locale){
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

require __DIR__.'/auth.php';
