<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
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
        $file = File::simplePaginate(5);
        return view('file.index', compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
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
            'nama_file'      => 'required|unique:file_download',
            'link_file'    => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('File/create')
                ->withErrors($validator);
        }else{
            $file = new File;
            $file->nama_file = $request['nama_file'];
            $file->link_file = $request['link_file'];
            $file->deskripsi_file = $request['deskripsi_file'];

            $file->save();

            return redirect('File')->with('success', 'File ditambahkan');
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
        $file = File::find($id);
        if($file) {
            return view('File.show', compact('file'));
        }else{
            return redirect('File')->with('error', 'Data tidak ditemukan');
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
        $file = File::find($id);
        if($file) {
            return view('File.edit', compact('file'));
        }else{
            return redirect('File')->with('error', 'Data tidak ditemukan');
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
        $file = File::find($id);
        // return $file;
        $file->nama_file = $request['nama_file'];
        $file->link_file = $request['link_file'];
        $file->deskripsi_file = $request['deskripsi_file'];

        if($file->save()) {
            return redirect('File')->with('success', 'File berhasil diubah');
        }else{
            return redirect('File/'.$file->id.'edit')->with('error', 'Edit data gagal');
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
        $file = File::find($id);
        if($file->delete()) {
            return redirect('File')->with('success', 'File berhasil dihapus!');    
        }else{
            return redirect('File/'.$id)->with('error', 'File gagal dihapus!');
        }
    }
}
