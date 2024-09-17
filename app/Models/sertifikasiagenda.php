<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sertifikasiagenda extends Model
{
    use HasFactory, SoftDeletes, HasApiTokens;

    protected $guarded = ['id'];

    public function pengawasanlokasi()
    {
        return $this->belongsTo(pengawasanlokasi::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function agendastatus()
    {
        return $this->belongsTo(agendastatus::class);
    }

}
