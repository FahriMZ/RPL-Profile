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
use App\KolomGuru;
use App\Rpl;

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
        $rpl = Rpl::find(1);
        return view('home', compact('rpl'));
    }

    public function sejarah() {
        $rpl = Rpl::find(1);
        return view('guest.sejarah', compact('rpl'));
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
        $kolom = KolomGuru::orderBy('tanggal_dipost', 'desc')->paginate(3);
        return view('guest.kolom-guru', compact('kolom'));
    }

    public function search()  {
        if(isset($_GET['v']) && isset($_GET['q'])) {
            $view = $_GET['v'];
            $key = $_GET['q'];

            if($key == '') { // Redirect kalau query kosong
                switch ($view) {
                    case base64_encode('a'): // Agenda
                    return redirect('/agenda');
                    break;
                case base64_encode('b'): // Berita
                    return redirect('/berita');
                    break;
                case base64_encode('f'): // File Download
                    return redirect('/download');
                    break;
                case base64_encode('g'): // Data Guru
                    return redirect('/guru');
                    break;
                case base64_encode('l'): // Lowongan Kerja
                    return redirect('/lowongan');
                    break;
                case base64_encode('p'): // Peluang
                    return redirect('/peluang-kerja');
                    break;
                case base64_encode('kg'): // Kolom Guru
                    return redirect('/kolom-guru');
                    break;
                default:
                    return redirect('/');
                    break;
                }
            }

            switch ($view) {
                case base64_encode('a'): // Agenda
                    $agenda = Agenda::where('judul_agenda', 'LIKE', "%$key%")
                        ->orderBy('tanggal_agenda', 'desc')
                        ->paginate(3);
                    return view('guest.agenda', compact('agenda'));
                    break;
                case base64_encode('b'): // Berita
                    $berita = Berita::where('judul_berita', 'LIKE', "%$key%")
                        ->orderBy('tanggal_berita', 'desc')
                        ->paginate(3);
                    return view('guest.berita', compact('berita'));
                    break;
                case base64_encode('f'): // File Download
                    $file = File::where('nama_file', 'LIKE', "%$key%")->paginate(3);
                    return view('guest.file', compact('file'));
                    break;
                case base64_encode('g'): // Data Guru
                    $guru = Guru::where('nama_guru', 'LIKE', "%$key%")->paginate(3);
                    return view('guest.guru', compact('guru'));
                    break;
                case base64_encode('l'): // Lowongan Kerja
                    $peluang = Peluang::where('nama_pekerjaan', 'LIKE', "%$key%")
                        ->orderBy('tanggal_dipost', 'desc')
                        ->paginate(3);
                    return view('guest.peluang', compact('peluang'));
                    break;
                case base64_encode('p'): // Lowongan Kerja
                    $pengumuman = Pengumuman::where('judul_pengumuman', 'LIKE', "%$key%")
                        ->orderBy('tanggal_pengumuman', 'desc')
                        ->paginate(3);
                    return view('guest.pengumuman', compact('pengumuman'));
                    break;
                case base64_encode('kg'): // Kolom Guru
                    $kolom = KolomGuru::where('judul_karya', 'LIKE', "%$key%")
                        ->orderBy('tanggal_dipost', 'desc')
                        ->paginate(3);
                    return view('guest.kolom-guru', compact('kolom'));
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        
    }
}