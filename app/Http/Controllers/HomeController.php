<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function agenda() {
        $agenda = Agenda::All();
        return view('guest.agenda', compact('agenda'));
    }

    public function berita() {
        return view('guest.berita');
    }
}
