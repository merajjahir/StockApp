<?php

use App\Http\Controllers\FetchingApiController;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;

//fetching from the json api that is providing the stock datas

Route::get('/home',[FetchingApiController::class,'Reading'])->name('home');

Route::get('/', function(){return redirect('/home');});
