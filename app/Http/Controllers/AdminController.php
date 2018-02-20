<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rpl;

class AdminController extends Controller
{
    //
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
        $rpl = Rpl::find(1);
        return view('admin', compact('rpl'));
    }
}
