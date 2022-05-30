<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    protected $table = 'pegawai';
    public $timestamps = false;
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pengmas() {
        return $this->belongsToMany(Pengmas::class, 'daftar_pengmas', 'nip', 'pengmas_id')
        ->withPivot('ketua');
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
