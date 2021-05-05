<?php

//use Illuminate\Support\Facades\Route;
//use Sedevtest\Contact\Http\Controllers;

// //by direct view
// Route::get('/contact', function(){

//      return view('contact::contact');

// })->name('contact');


// by namespace

// Route::group(['namespace'=>'Sedevtest\Contact\Http\Controllers'], function(){

//      Route::get('/contact',[ContactController::class,'index'])->name('contact');

// });

// Route::prefix('contact')->namespace('Sedevtest\Contact\Http\Controllers')->group(function() {
    
//      Route::get('/', [ContactController:: class, 'index'])->name('contact.index');
//  });
 
//Route::get('/contact','Sedevtest\Contact\Http\Controllers\ContactController@index')->name('contact');



Route::group(['namespace'=>'Sedevtest\Contact\Http\Controllers'], function(){

   
    Route::get('/contact','ContactController@index')->name('contact.index');
    Route::post('/contact','ContactController@send')->name('contact.send');
   
});