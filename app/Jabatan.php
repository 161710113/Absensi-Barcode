<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;

class Jabatan extends Model
{
    protected $table = 'jabatans';
    protected $fillable = ['nama_jabatan'];
    public $timestamp = 'true';

    public function Pegawai() {
        return $this->hasMany('App\Pegawai', 'jabatan_id');
    }
}
