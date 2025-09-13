<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
// post route
use Illuminate\Http\Request;

Route::post('/submitform', function (Request $request) {
    $request->validate([
        'exampleInput' => 'required|string|max:255|min:3',
    ]);
    
    $input = $request->input('exampleInput');
    return "the text you type is: $input"   ;
})->name('submitform');





