<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showAdminPanel(){
        return view('admin.add_new_bsns');
    }

    public function showManageBsns(){
        return view('admin.show_manage_bsns');
    }

    public function browseCategories(){
        return view('browse');
    }

    public function showShopLayout(){
        return view('shop');
    }
}
