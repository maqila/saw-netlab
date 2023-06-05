<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'normalisasis';
    protected $fillable = ['kriteria_id', 'pilihan'];
    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
    public function penilaian()
    {
        return $this->hasMany(Penilaian::class);
    }
}
