<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pegawai extends Model
{
    use HasFactory;
    // protect id -> all fill can be filled except ID
    protected $guarded = ['id'];

    public function sppds()
    {
        return $this->hasMany(Sppd::class, 'pegawai_id');
    }

    public function pengikuts()
    {
        return $this->belongsToMany(Sppd::class, 'pengikuts', 'pegawai_id', 'sppd_id');
    }
}
