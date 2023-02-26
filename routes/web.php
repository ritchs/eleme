<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/eleme', function () {
    $elem = DB::table('agency')
    ->select('name','phone','email')
    ->get();
    return $elem;
    
});

Route::get('/eleme/creat', function (Request $request) {
    $elem = DB::insert('insert into agency (name,phone,email) values (?, ?,?)', [$request->name,$request->phone,$request->email]);
    return $elem;
});

