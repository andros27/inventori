<?php

namespace App\Http\Controllers;
use app\User;
use app\Kategori;
use App\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $supplier = Supplier::all();
        return view('admin.main', compact('user', 'supplier'));
    }
}
