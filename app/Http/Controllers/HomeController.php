<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Berita;
use App\Pengumuman;
use App\File;
use App\Pesan;
use App\Guru;
use App\Organisasi;

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
        $berita = Berita::All();
        return view('guest.berita', compact('berita'));
    }

    public function pengumuman() {
        $pengumuman = Pengumuman::All();
        return view('guest.pengumuman', compact('pengumuman'));
    }

    public function tamu() {
        $pesan = Pesan::All();
        return view('guest.tamu', compact('pesan'));
    }

    public function guru() {
        $guru = Guru::All();
        return view('guest.guru', compact('guru'));
    }

    public function download() {
        $file = File::All();
        return view('guest.file', compact('file'));
    }

    public function organisasi() {
        
        $kepala_ti = Guru::where('jabatan_guru', 'Ketua Kompetensi Keahlian TIK')->first();
        $kepala_rpl = Guru::where('jabatan_guru', 'Kepala RPL')->first();

        // $guru_rpl = Guru::where('jabatan_guru', 'Guru RPL')->get();

        // dd($organisasi);
        // return view('guest.struktur', compact('kepala_ti', 'kepala_rpl', 'guru_rpl'));
        return view('guest.struktur', compact('kepala_ti', 'kepala_rpl'));
    }
}
