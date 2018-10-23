<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Jabatan;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawai = Pegawai::all();
        return view('Pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('Pegawai.create', compact('pegawai','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, 
        ['nip' => 'required|numeric|unique:pegawais',
        'nama' => 'required',
        'jabatan_id' => 'required']);
        $pegawai = Pegawai::create($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
        $pegawai = Pegawai::findOrFail($pegawai->id);
        $jabatan = Jabatan::all();
        $jabatanselect = Pegawai::findOrFail($pegawai->id)->jabatan_id;
        return view('Pegawai.edit',compact('pegawai','jabatan','jabatanselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $this->validate($request, 
        [
            'nip' => 'required|numeric|unique:pegawais',
            'nama' => 'required',
            'jabatan_id' => 'required'
        ]);
        $pegawai = Pegawai::find($pegawai->id);
        $pegawai->update($request->all());
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        Pegawai::destroy($pegawai->id);
        return redirect()->route('pegawai.index');
    }
}
