<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    return view('home');
});
Route::get('/contact',function(){
    return view('contact');
});

//to call this route you can either use 
//<form action="{{url('/sendMessage')}}" using the url() function, which uses the url in the post methode
//or
//<form action="{{route('submitForm')}}" using the route() function, it uses the name of the route
Route::post('/sendMessage',function(){
    //I used the request() funtion to access the submited data
    $user = request();

    //you can use this array as the second parameter of the view
    //['nom'=>$user->nom,'email'=>$user->email,'message'=>$user->message]
    return view('appreciation',compact('user'));
    //by the way, the array passed in the second parameter contains the _token variable
    //that We passed in the Contact form when we used @csrf
})->name('submitForm');





//it is unecessary to declare the thanks route since we are automatically redirecting to 
// to it when the user submits the form

// Route::get('/thanks',function(){
//     return view('appreciation');
// });



// Route::get('/', function () {
//     return view('welcome');
// });
