<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/deneme',function (){
    return view('ornek');
});
Route::get("/test/{isim}", [Ornek::class,"test"]);

Route::get('/web',[Yonet::class,'site'])->name('web');

Route::get("/form",[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
