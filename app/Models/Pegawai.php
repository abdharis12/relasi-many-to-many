<?php

namespace App\Models;

use App\Models\Sppd;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Pegawai extends Model
{
    use HasFactory;
    // protect id -> all fill can be filled except ID
    protected $guarded = ['id'];

    public function sppds(): BelongsToMany
    {
        return $this->belongsToMany(Sppd::class);
    }
}
