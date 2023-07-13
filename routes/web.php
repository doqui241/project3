<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Mail\GuiEmail;
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
Route::controller(TicketController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/pay', 'pay')->name('pay');
});
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'index')->name('events.event');
    Route::get('/detail_event/{id}', 'show')->name('event.show');
});




Route::post("/guilienhe", function(Illuminate\Http\Request $request){ 
    $arr = request()->post(); 
    $ten = trim(strip_tags( $arr['ten'] ));
    $email = trim(strip_tags( $arr['email'] ));
    $sdt = trim(strip_tags( $arr['sdt'] ));
    $diachi = trim(strip_tags( $arr['diachi'] ));
    $nd = trim(strip_tags( $arr['nd'] ));
    $adminEmail = 'doqui241@gmail.com'; //Gửi thư đến ban quản trị
    Mail::mailer('smtp')->to( $adminEmail )
    ->send( new GuiEmail($ten, $email,$sdt,$diachi, $nd) );
    
    return view('contact')->with(['adminEmail' => $adminEmail]);
    //  return redirect("thongbao"); 
  });
  Route::get("/thongbao", function(Illuminate\Http\Request $request){ 
    $tb = $request->session()->get('thongbao');
    return view('thongbao',['thongbao'=> $tb]); 
  });





Route::get('/contact', function () {
    return view('contact');
});