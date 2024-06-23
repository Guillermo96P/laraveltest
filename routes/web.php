<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index']);
Route::get('otro/{post}', [PrimerControlador::class, 'otro']);

// Route::get('/master', function () {
    
//     return view('master');
// })->name('master');

// Route::get('/contact', function () {

//       return to_route('contact1');
//    return redirect()->route('contact1');
//    return redirect('/contact1', 302);
//    $age = 27; 
//    $data = ['name' => 'Guillermo', 'age' => $age]; 
//    return view('contact', $data); 
// })->name('contact');

// Route::get('/contact1', function () {

//     $age = 30;
//     $data = ['name' => 'Javier', 'age' => $age];
//     return view('contact1', $data);
// })->name('contact1');

// Route::get('/crud', function () {
//     return view('crud/index'); 
//  });

// Route::get('/crud', function () {

//     $age = 27;
//     $data = ['name' => 'Guillermo', 'age' => $age];

//     return view('crud/index', $data);
// })->name('crud');