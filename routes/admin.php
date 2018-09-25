<?php
Route::get('/dashboard','AdminAuth\DashboardController@index')->name('dashboard');
// Route::get('/dashboard', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('admin')->user();
//     return view('admin.dashboard');
// })->name('dashboard');