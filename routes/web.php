<?php

use App\Mail\Mensajes;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('contactanos',function() {
     $nombre = "Dennis";
    Mail::to('dsoliz.221ds33@istta.edu.pe')->send(new Mensajes($nombre));
    return "Mensaje enviado";
});
