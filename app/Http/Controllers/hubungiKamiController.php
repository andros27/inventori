<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Hubungi;

class hubungiKamiController extends Controller
{
    //
    public function index()
    {
    	return view('coba.hubungiKami');
    }

    public function store(Request $request)
    {
    	$hubungi = new App\Hubungi;
    	$hubungi->email 	= $request->email;
    	$hubungi->nama 	= $request->nama;
    	$hubungi->pesan 	= $request->pesan;
    	$hubungi->save();
    	return redirect('hubungiKami'); 
    }
}
