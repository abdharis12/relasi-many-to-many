<?php

namespace App\Models;

use App\Models\Sppd;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pengikut extends Model
{
    use HasFactory;
    // protect id -> all fill can be filled except ID
    protected $guarded = ['id'];

    protected $table = 'pengikuts';

    public function sppd()
    {
        return $this->belongsTo(Sppd::class, 'sppd_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
