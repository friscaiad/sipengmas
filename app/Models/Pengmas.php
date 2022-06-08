<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pengmas extends Model
{
    use Searchable;
    protected $table = 'pengmas';
    public $timestamps = false;

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }

    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }

    public function skema()
    {
        return $this->belongsTo(Skema::class);
    }

    public function ketua() {
        return $this->belongsToMany(Pegawai::class, 
        'daftar_pengmas', 'pengmas_id', 'nip')
        ->wherePivot('ketua', 1);
    }

    public function anggota() {
        return $this->belongsToMany(Pegawai::class, 
        'daftar_pengmas', 'pengmas_id', 'nip')
        ->wherePivot('ketua', 0);
    }

    public function toSearchableArray() {
        $pengmas = $this
        ->with('ketua:nip,nama_lengkap')
        ->with('anggota:nip,nama_lengkap')
        ->with('periode')
        ->with('prodi')
        ->with('departemen')
        ->with('skema')
        ->where('id', $this->id)
        ->first()
        ->toArray();

        return $pengmas;
    } 
}
