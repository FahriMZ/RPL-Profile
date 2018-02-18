<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GUru;

class GuruController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::simplePaginate(3);
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            // 'nip'      => 'unique:guru',
            'nama_guru'    => 'required',

        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Guru/create')
                ->withErrors($validator);
        }else{
            $guru = new Guru;
            $guru->nip = $request['nip'];
            $guru->nama_guru = $request['nama_guru'];
            $guru->deskripsi_guru = $request['deskripsi_guru'];
            $guru->jabatan_guru = $request['jabatan_guru'];

            $guru->save();

            return redirect('Guru')->with('success', 'Guru ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        if($guru) {
            return view('Guru.show', compact('guru'));
        }else{
            return redirect('Guru')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        if($guru) {
            return view('Guru.edit', compact('guru'));
        }else{
            return redirect('Guru')->with('error', 'Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::find($id);
        // return $guru;
        $guru->nip = $request['nip'];
        $guru->nama_guru = $request['nama_guru'];
        $guru->deskripsi_guru = $request['deskripsi_guru'];
        $guru->jabatan_guru = $request['jabatan_guru'];

        if($guru->save()) {
            return redirect('Guru')->with('success', 'Data guru berhasil diubah');
        }else{
            return redirect('Guru/'.$guru->id.'edit')->with('error', 'Edit data gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        if($guru->delete()) {
            return redirect('Guru')->with('success', 'Data guru berhasil dihapus!');    
        }else{
            return redirect('Guru/'.$id)->with('error', 'Data guru gagal dihapus!');
        }
    }
}
