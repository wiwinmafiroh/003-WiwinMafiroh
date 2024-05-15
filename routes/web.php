<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/loginpage', function () {
  return view('loginpage');
})->name("loginpage");
