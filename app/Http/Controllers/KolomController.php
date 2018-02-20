<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KolomGuru;
use App\Guru;

class KolomController extends Controller
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
        // $kolom = KolomGuru::simplePaginate(3);
        $kolom = KolomGuru::all();
        return view('kolom.index', compact('kolom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_guru = Guru::select('nama_guru')->get();
        return view('kolom.create', compact('nama_guru'));
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
            'judul_karya' => 'required',
            'karya' => 'required',
            'tipe_karya' => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('KolomGuru/create')
                ->withErrors($validator);
        }else{
            $kolom = new KolomGuru;
            $kolom->id_guru = Guru::select('id')->where('nama_guru', $request['nama_guru'])->first()['id'];;
            $kolom->judul_karya = $request['judul_karya'];
            $kolom->karya = $request['karya'];
            $kolom->tipe_karya = $request['tipe_karya'];
            

            $kolom->save();

            return redirect('KolomGuru')->with('success', 'Kolom ditambahkan');
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
        $kolom = KolomGuru::find($id);
        if($kolom) {
            return view('Kolom.show', compact('kolom'));
        }else{
            return redirect('KolomGuru')->with('error', 'Data tidak ditemukan');
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
        $nama_guru = Guru::select('nama_guru')->get();
        $kolom = KolomGuru::find($id);
        if($kolom) {
            return view('Kolom.edit', compact('kolom', 'nama_guru'));
        }else{
            return redirect('KolomGuru')->with('error', 'Data tidak ditemukan');
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
        $kolom = KolomGuru::find($id);
        // return $kolom;
        $kolom->id_guru = Guru::select('id')->where('nama_guru', $request['nama_guru'])->first()['id'];;
        $kolom->judul_karya = $request['judul_karya'];
        $kolom->karya = $request['karya'];
        $kolom->tipe_karya = $request['tipe_karya'];

        if($kolom->save()) {
            return redirect('KolomGuru')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('KolomGuru/'.$kolom->id.'edit')->with('error', 'Edit data gagal');
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
        $kolom = KolomGuru::find($id);
        if($kolom->delete()) {
            return redirect('KolomGuru')->with('success', 'Data berhasil dihapus!');    
        }else{
            return redirect('KolomGuru/'.$id)->with('error', 'Penghapusan gagal!');
        }
    }
}
