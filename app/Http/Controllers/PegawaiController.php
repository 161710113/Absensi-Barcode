<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Jabatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function index()
    // {
    //     //
    //     $pegawai = Pegawai::all();
    //     return view('Pegawai.index', compact('pegawai'));
    // }
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
        $pegawai = Pegawai::with(['jabatan']);
        // return Datatables::of($pegawai)->make(true);
        return Datatables::of($pegawai)
        ->addColumn('action', function($pegawai){
            return view('materials._action', [
            'model'=> $pegawai,
            'delete_url'=> route('pegawai.destroy', $pegawai->id),
            'edit_url' => route('pegawai.edit', $pegawai->id),
            ]);
        })->make(true);
    }
    $html = $htmlBuilder
    ->addColumn(['data' => 'nip', 'name'=>'nip', 'title'=>'NIP'])
    ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama'])
    ->addColumn(['data' => 'jabatan.nama_jabatan', 'name'=>'jabatan.nama_jabatan', 'title'=>'Jabatan'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Pegawai.index')->with(compact('html'));
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
