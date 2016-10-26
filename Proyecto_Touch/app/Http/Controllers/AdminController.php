<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

	/**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->user = "admin";
    //     $this->middleware('admin');
    // }


	public function index()
    {
        return view('admin/home');
    }
}