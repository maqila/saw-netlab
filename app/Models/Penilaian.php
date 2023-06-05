<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaians';
    protected $guarded = [];
    public function normalisasi()
    {
        return $this->belongsTo(Normalisasi::class);
    }
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }

}
