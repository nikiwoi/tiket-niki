<?php

use App\Mail\RegistrationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'phone' => ['required', 'string', 'max:50'],
        'ticket-type' => ['required', 'string', 'in:ga,vip,meet-greet'],
        'quantity' => ['required', 'integer', 'min:1', 'max:10'],
    ]);

    Mail::to($validated['email'])->send(new RegistrationEmail($validated));

    return back()->with('success', 'Registration successful! Check your email (' . $validated['email'] . ') for your ticket confirmation.');
})->name('register.submit');

