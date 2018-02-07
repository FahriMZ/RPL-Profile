<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::All();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'judul_berita'      => 'required|min:10|unique:berita',
            'tanggal_berita'    => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Berita/create')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        }else{
            $berita = new Berita;
            $berita->judul_berita = $request['judul_berita'];
            $berita->tanggal_berita = $request['tanggal_berita'];
            $berita->isi_berita = $request['isi_berita'];

            $berita->save();

            return redirect('Berita')->with('success', 'Berita ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        if($berita) {
            return view('Berita.show', compact('berita'));
        }else{
            return redirect('Berita')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        if($berita) {
            return view('Berita.edit', compact('berita'));
        }else{
            return redirect('Berita')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        // return $berita;
        $berita->judul_berita = $request['judul_berita'];
        $berita->tanggal_berita = $request['tanggal_berita'];
        $berita->isi_berita = $request['isi_berita'];

        if($berita->save()) {
            return redirect('Berita')->with('success', 'Berita berhasil diubah');
        }else{
            return redirect('Berita/'.$berita->id.'edit')->with('error', 'Edit data gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        if($berita->delete()) {
            return redirect('Berita')->with('success', 'Berita berhasil dihapus!');    
        }else{
            return redirect('Berita/'.$id)->with('error', 'Berita gagal dihapus!');
        }
    }
}
