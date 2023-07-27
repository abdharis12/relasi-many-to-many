<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sppd extends Model
{
    use HasFactory;
    // protect id -> all fill can be filled except ID
    protected $guarded = ['id'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }

    public function pengikut()
    {
        return $this->belongsToMany(Pegawai::class, 'pengikuts', 'sppd_id', 'pegawai_id');
    }

}
