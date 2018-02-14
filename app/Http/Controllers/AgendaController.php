<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
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
        $agenda = Agenda::simplePaginate(5);
        return view('agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
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
            'judul_agenda'      => 'required|min:10|unique:agenda',
            'tanggal_agenda'    => 'required',
        ]);

        // process the login
        if (!$validator) {
            return Redirect::to('Agenda/create')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        }else{
            $agenda = new Agenda;
            $agenda->judul_agenda = $request['judul_agenda'];
            $agenda->tanggal_agenda = $request['tanggal_agenda'];
            $agenda->isi_agenda = $request['isi_agenda'];

            $agenda->save();

            return redirect('Agenda')->with('success', 'Agenda ditambahkan');
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
        $agenda = Agenda::find($id);
        if($agenda) {
            return view('agenda.show', compact('agenda'));
        }else{
            return redirect('Agenda')->with('error', 'Data tidak ditemukan');
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
        $agenda = Agenda::find($id);
        if($agenda) {
            return view('agenda.edit', compact('agenda'));
        }else{
            return redirect('Agenda')->with('error', 'Data tidak ditemukan');
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
        $agenda = Agenda::find($id);
        // return $agenda;
        $agenda->judul_agenda = $request['judul_agenda'];
        $agenda->tanggal_agenda = $request['tanggal_agenda'];
        $agenda->isi_agenda = $request['isi_agenda'];

        if($agenda->save()) {
            return redirect('Agenda')->with('success', 'Agenda berhasil diubah');
        }else{
            return redirect('Agenda/'.$agenda->id.'edit')->with('error', 'Edit data gagal');
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
        $agenda = Agenda::find($id);
        if($agenda->delete()) {
            return redirect('Agenda')->with('success', 'Agenda berhasil dihapus!');    
        }else{
            return redirect('Agenda/'.$id)->with('error', 'Agenda gagal dihapus!');
        }

        
    }
}
