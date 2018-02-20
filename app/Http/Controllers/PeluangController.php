<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peluang;

class PeluangController extends Controller // CONTROLLER UNTUK LOWONGAN KERJA, BUKAN PELUANG KERJA RPL.
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
        // $peluang = Peluang::simplePaginate(5);
        $peluang = Peluang::all();
        return view('peluang.index', compact('peluang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peluang.create');
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
            'nama_pekerjaan'      => 'required',
            'nama_perusahaan'    => 'required',
            'deskripsi_pekerjaan' => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Peluang/create')
                ->withErrors($validator);
        }else{
            $peluang = new Peluang;
            $peluang->nama_pekerjaan = $request['nama_pekerjaan'];
            $peluang->nama_perusahaan = $request['nama_perusahaan'];
            $peluang->deskripsi_pekerjaan = $request['deskripsi_pekerjaan'];

            $peluang->save();

            return redirect('Peluang')->with('success', 'Lowongan kerja ditambahkan');
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
        $peluang = Peluang::find($id);
        if($peluang) {
            return view('Peluang.show', compact('peluang'));
        }else{
            return redirect('Peluang')->with('error', 'Data tidak ditemukan');
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
        $peluang = Peluang::find($id);
        if($peluang) {
            return view('Peluang.edit', compact('peluang'));
        }else{
            return redirect('Peluang')->with('error', 'Data tidak ditemukan');
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
        $peluang = Peluang::find($id);
        // return $peluang;
        $peluang->nama_pekerjaan = $request['nama_pekerjaan'];
        $peluang->nama_perusahaan = $request['nama_perusahaan'];
        $peluang->deskripsi_pekerjaan = $request['deskripsi_pekerjaan'];

        if($peluang->save()) {
            return redirect('Peluang')->with('success', 'Lowongan kerja berhasil diubah');
        }else{
            return redirect('Peluang/'.$peluang->id.'edit')->with('error', 'Edit data gagal');
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
        $peluang = Peluang::find($id);
        if($peluang->delete()) {
            return redirect('Peluang')->with('success', 'Lowongan kerja berhasil dihapus!');
        }else{
            return redirect('Peluang/'.$id)->with('error', 'Lowongan kerja gagal dihapus!');
        }
    }
}
