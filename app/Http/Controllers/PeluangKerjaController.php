<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PeluangKerja;

class PeluangKerjaController extends Controller
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
        // $peluang = PeluangKerja::simplePaginate(5);
        $peluang = PeluangKerja::all();
        return view('peluangKerja.index', compact('peluang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peluangKerja.create');
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
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('PeluangKerja/create')
                ->withErrors($validator);
        }else{
            $peluang = new PeluangKerja;
            $peluang->nama = $request['nama'];
            $peluang->deskripsi = $request['deskripsi'];

            $peluang->save();

            return redirect('PeluangKerja')->with('success', 'Peluang Kerja ditambahkan');
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
        $peluang = PeluangKerja::find($id);
        if($peluang) {
            return view('PeluangKerja.show', compact('peluang'));
        }else{
            return redirect('PeluangKerja')->with('error', 'Data tidak ditemukan');
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
        $peluang = PeluangKerja::find($id);
        if($peluang) {
            return view('PeluangKerja.edit', compact('peluang'));
        }else{
            return redirect('PeluangKerja')->with('error', 'Data tidak ditemukan');
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
        $peluang = PeluangKerja::find($id);
        // return $peluang;
        $peluang->nama = $request['nama'];
        $peluang->deskripsi = $request['deskripsi'];

        if($peluang->save()) {
            return redirect('PeluangKerja')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('PeluangKerja/'.$peluang->id.'edit')->with('error', 'Edit data gagal');
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
        $peluang = PeluangKerja::find($id);
        if($peluang->delete()) {
            return redirect('PeluangKerja')->with('success', 'Data berhasil dihapus!');
        }else{
            return redirect('PeluangKerja/'.$id)->with('error', 'Data gagal dihapus!');
        }
    }
}