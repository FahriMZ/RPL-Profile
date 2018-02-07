<?php

namespace App\Http\Controllers;

use App\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
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
        $pesan = Pesan::All();
        return view('pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesan.create');
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
            'nama'      => 'required|min:3',
            'email'     => 'required|email',
            'pesan'     =>'required|min:10',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Pesan/create')
                ->withErrors($validator);
        }else{
            $pesan = new Pesan;
            $pesan->nama =  $request['nama'];
            $pesan->email = $request['email'];
            $pesan->pesan = $request['pesan'];

            $pesan->save();

            return redirect('Pesan')->with('success', 'Pesan ditambahkan');
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
        $pesan = Pesan::find($id);
        if($pesan) {
            return view('Pesan.show', compact('pesan'));
        }else{
            return redirect('Pesan')->with('error', 'Data tidak ditemukan');
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
        // Fitur Edit ga ada.
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
        $pesan = Pesan::find($id);
        // return $pesan;
        $pesan->nama =  $request['nama'];
        $pesan->email = $request['email'];
        $pesan->pesan = $request['pesan'];

        if($pesan->save()) {
            return redirect('Pesan')->with('success', 'Pesan berhasil diubah');
        }else{
            return redirect('Pesan/'.$pesan->id.'edit')->with('error', 'Edit data gagal');
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
        $pesan = Pesan::find($id);
        if($pesan->delete()) {
            return redirect('Pesan')->with('success', 'Pesan berhasil dihapus!');    
        }else{
            return redirect('Pesan/'.$id)->with('error', 'Pesan gagal dihapus!');
        }
    }
}
