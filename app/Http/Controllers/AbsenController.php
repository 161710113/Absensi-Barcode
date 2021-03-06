<?php

namespace App\Http\Controllers;

use App\Absen;
use App\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Validation\Validator;

class AbsenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            ->addColumn(['data' => 'jam_masuk', 'name'=>'jam_masuk', 'title'=>'Jam Masuk']);
            // ->addColumn(['data' => 'jam_keluar', 'name'=>'jam_keluar', 'title'=>'Jam Keluar']);            
            
            return view('Absen.index')->with(compact('html'));
    }
    public function input(Request $request, Builder $htmlBuilder)
    {
        $pegawai = Pegawai::all();
        $absen = Absen::all();
        // return view('Pegawai.create', compact('pegawai','jabatan'));
        if ($request->ajax()) {
        $pegawai = Pegawai::with(['absen']);               
        return Datatables::of($pegawai)
        ->addColumn('action', function($pegawai){
            return view('materials._absen', [
            'model'=> $pegawai,            
            //  
            // 'keluar' => $pegawai->id,
            ]);
        }
        )
        ->make(true);
    }    
    $html = $htmlBuilder
    ->addColumn(['data' => 'nip', 'name'=>'nip', 'title'=>'NIP'])
    ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama']);
    // ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('Absen.input')->with(compact('html','pegawai','jabatan'));
    }
    
    // public function jam(Request $request)
    // {        
    //     $pegawai_id = Absen::with('Pegawai')->get();
    //     $tanggal = date("Y-m-d"); // 2017-02-01
    //     $jam = date("H:i:s"); // 12:31:20

    //     $absen = new Absen;
    //     // absen masuk

    //     if (isset($request->masuk)){
    //          //cek double data
    //         $cek_double = $absen->where(['tanggal'=> $tanggal, 'pegawai_id' => $pegawai_id])->count();
            
    //         if ($cek_double >0 ){
    //             return redirect()->back();
    //         }

    //         $absen->create([
    //             'pegawai_id'   => $pegawai_id,
    //             'tanggal'      => $tanggal,
    //             'jam_masuk'   => $jam]);

    //         return redirect()->back();

    //     } //absen keluar 
    //     elseif (isset($request->keluar)){
    //         $absen->where(['tanggal' => $tanggal, 'pegawai_id' => $pegawai_id])
    //             ->update([
    //                 'jam_keluar' => $jam]);
    //         return redirect()->back();       
    //     }
       
    //     // dd ($absen);
    //     return $request->all();
    // }

    public function masuk(Request $request){

    }
    public function keluar(Request $request){

    }
    public function store(Request $request)
    {
        //
        $this->validate($request, 
        ['tanggal' => 'required',
        'jam_masuk' => 'required',
        'pegawai_id' => 'required']);
        $absen = Absen::create($request->all());
        return redirect()->route('absen.index');
    }
    // public function update(Request $request,$id)
    // {
    //     $this->validate($request, 
    //     ['jam_keluar' => 'required',
    //     'pegawai_id' => 'required']);
    //     $absen = Absen::find($id);
    //     $absen->update($request->all());
    //     return redirect()->route('absen.index');
    // }
}
