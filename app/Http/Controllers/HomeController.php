<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Berita;
use App\Pengumuman;
use App\File;
use App\Pesan;
use App\Guru;
use App\Organisasi;
use App\Peluang;
use App\PeluangKerja;

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
        $agenda = Agenda::orderBy('tanggal_agenda', 'desc')->paginate(3);
        return view('guest.agenda', compact('agenda'));
    }

    public function berita() {
        $berita = Berita::orderBy('tanggal_berita', 'desc')->paginate(3);
        return view('guest.berita', compact('berita'));
    }

    public function pengumuman() {
        $pengumuman = Pengumuman::orderBy('tanggal_pengumuman', 'desc')->paginate(3);
        return view('guest.pengumuman', compact('pengumuman'));
    }

    public function tamu() {
        return view('guest.tamu');
    }

    public function guru() {
        $guru = Guru::paginate(3);
        return view('guest.guru', compact('guru'));
    }

    public function download() {
        $file = File::paginate(3);
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

    public function peluang() {
        $peluang = Peluang::orderBy('tanggal_dipost', 'desc')->paginate(3);
        return view('guest.peluang', compact('peluang'));
    }

    public function peluangKerja() {
        $peluang = PeluangKerja::paginate(3);
        return view('guest.peluangKerja', compact('peluang'));
    }

    public function kurikulum() {
        return view('guest.kurikulum');
    }

    public function kolomGuru() {
        return view('guest.kolom-guru');
    }

    public function search()  {
        if(isset($_GET)) {
            $view = $_GET['v'];
            $key = $_GET['q'];
            switch ($view) {
                case base64_encode('a'):
                    $agenda = Agenda::where('judul_agenda', 'LIKE', "%$key%")
                        ->orderBy('tanggal_agenda', 'desc')
                        ->paginate(3);
                    return view('guest.agenda', compact('agenda'));
                    break;

                case base64_encode('b'):
                    $berita = Berita::where('judul_berita', 'LIKE', "%$key%")
                        ->orderBy('tanggal_berita', 'desc')
                        ->paginate(3);
                    return view('guest.berita', compact('berita'));
                    break;
                case base64_encode('f'):
                    $file = File::where('nama_file', 'LIKE', "%$key%")->paginate(3);
                    return view('guest.file', compact('file'));
                    break;
                case base64_encode('g'):
                    $guru = Guru::where('nama_guru', 'LIKE', "%$key%")->paginate(3);
                    return view('guest.guru', compact('guru'));
                    break;
                case base64_encode('l'):
                    $peluang = Peluang::where('nama_pekerjaan', 'LIKE', "%$key%")
                        ->orderBy('tanggal_dipost', 'desc')
                        ->paginate(3);
                    return view('guest.peluang', compact('peluang'));
                    break;

                default:
                    return redirect('/');
                    break;
            }
        }
        
    }
}
