<?php

namespace App\Http\Controllers;

use App\Absen;
use App\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $pegawai = Pegawai::all();
    //     $absen = Absen::orderBy('created_at','decs')->paginate(10);
    //     return view('Absen.index', compact('absen','pegawai'));
    // }
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $absen = Absen::with('pegawai');
            return Datatables::of($absen)->make(true);
            }
            $html = $htmlBuilder
            ->addColumn(['data' => 'pegawai.nip', 'name'=>'pegawai.nip', 'title'=>'NIP'])
            ->addColumn(['data' => 'pegawai.nama', 'name'=>'pegawai.nama', 'title'=>'Pegawai'])
            ->addColumn(['data' => 'tanggal', 'name'=>'tanggal', 'title'=>'Tanggal'])
            ->addColumn(['data' => 'jam_masuk', 'name'=>'jam_masuk', 'title'=>'Jam Masuk'])
            ->addColumn(['data' => 'jam_keluar', 'name'=>'jam_keluar', 'title'=>'Jam Keluar']);            
            
            return view('Absen.index')->with(compact('html'));
    }
    public function input(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
        $pegawai = Pegawai::with(['absen']);
        // return Datatables::of($pegawai)->make(true);
        return Datatables::of($pegawai)
        ->addColumn('action', function($pegawai){
            return view('materials._absen', [
            'model'=> $pegawai,
            'delete_url'=> route('absen.destroy', $pegawai->id),
            'edit_url' => route('absen.edit', $pegawai->id),
            ]);
        })->make(true);
    }
    $html = $htmlBuilder
    ->addColumn(['data' => 'nip', 'name'=>'nip', 'title'=>'NIP'])
    ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Absen.input')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $absen = Absen::all();
        // $pegawai = Pegawai::all();
        // return view('Absen.input', compact('absen','pegawai'));
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
        [
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => '',
            'pegawai_id' => 'required']);
        $absen = Absen::create($request->all());
        return redirect()->route('absen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
