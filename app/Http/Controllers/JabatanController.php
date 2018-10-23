<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;

class JabatanController extends Controller
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
    //     $jabatan= Jabatan::all();
    //     return view ('Jabatan.index',compact('jabatan'));
    // }
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
        $jabatan = Jabatan::select(['id', 'nama_jabatan']);
        // return Datatables::of($jabatan)->make(true);
        return Datatables::of($jabatan)
        ->addColumn('action', function($jabatan){
            return view('materials._action', [
            'model'=> $jabatan,
            'delete_url'=> route('jabatan.destroy', $jabatan->id),
            'edit_url' => route('jabatan.edit', $jabatan->id),
            ]);
        })->make(true);
    }
    $html = $htmlBuilder
    ->addColumn(['data' => 'nama_jabatan', 'name'=>'nama_jabatan', 'title'=>'Jabatan'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Jabatan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Jabatan.create');
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
        $this->validate($request, ['nama_jabatan' => 'required|unique:jabatans']);
        $jabatan = Jabatan::create($request->all());
        return redirect()->route('jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        //
        $jabatan = Jabatan::findOrFail($jabatan->id);
        return view('Jabatan.edit',compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //
        $this->validate($request, ['nama_jabatan' => 'required|unique:jabatans']);
        $jabatan = Jabatan::find($jabatan->id);
        $jabatan->update($request->all());
        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jabatan $jabatan)
    {
        //
        Jabatan::destroy($jabatan->id);
        return redirect()->route('jabatan.index');
    }
}
