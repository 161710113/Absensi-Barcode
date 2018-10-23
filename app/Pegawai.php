<?php

namespace App;
use App\Absen;
use App\Jabatan;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = ['nip','nama','jabatan_id'];
    public $timestamp = 'true';

    public function Jabatan() {
        return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Absen() {
        return $this->hasMany('App\Absen', 'pegawai_id');
    }
}
