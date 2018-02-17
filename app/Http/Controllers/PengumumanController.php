<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengumuman = Pengumuman::simplePaginate(5);
        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
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
            'judul_pengumuman'      => 'required|min:10|unique:pengumuman',
            'jam_pengumuman'    => 'required',
            'tanggal_pengumuman'    => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Pengumuman/create')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        }else{
            $pengumuman = new Pengumuman;
            $pengumuman->judul_pengumuman = $request['judul_pengumuman'];
            $pengumuman->jam_pengumuman = $request['jam_pengumuman'];
            $pengumuman->tanggal_pengumuman = $request['tanggal_pengumuman'];
            $pengumuman->isi_pengumuman = $request['isi_pengumuman'];

            $pengumuman->save();

            return redirect('Pengumuman')->with('success', 'Pengumuman ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);
        if($pengumuman) {
            return view('Pengumuman.show', compact('pengumuman'));
        }else{
            return redirect('Pengumuman')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::find($id);
        if($pengumuman) {
            return view('Pengumuman.edit', compact('pengumuman'));
        }else{
            return redirect('Pengumuman')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::find($id);
        // return $pengumuman;
        $pengumuman->judul_pengumuman = $request['judul_pengumuman'];
        $pengumuman->jam_pengumuman = $request['jam_pengumuman'];
        $pengumuman->tanggal_pengumuman = $request['tanggal_pengumuman'];
        $pengumuman->isi_pengumuman = $request['isi_pengumuman'];

        if($pengumuman->save()) {
            return redirect('Pengumuman')->with('success', 'Pengumuman berhasil diubah');
        }else{
            return redirect('Pengumuman/'.$pengumuman->id.'edit')->with('error', 'Edit data gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        if($pengumuman->delete()) {
            return redirect('Pengumuman')->with('success', 'Pengumuman berhasil dihapus!');    
        }else{
            return redirect('Pengumuman/'.$id)->with('error', 'Pengumuman gagal dihapus!');
        }
    }
}
