<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;

class Absen extends Model
{
    protected $table = 'absens';
    protected $fillable = ['tanggal','jam_masuk',
    // 'jam_keluar',
    'pegawai_id'];
    public $timestamp = 'true';

    public function Pegawai() {
        return $this->belongsTo('App\Pegawai', 'pegawai_id');
    }
}
