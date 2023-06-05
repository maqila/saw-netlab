<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
    protected $guarded = [];
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastData = static::orderBy('kode', 'desc')->first();
            if ($lastData) {
                $lastNumber = (int)substr($lastData->kode, 1);
                $model->kode = 'A' . str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
            } else {
                $model->kode = 'A01';
            }
        });
    }

    public function generateKode()
    {
        $lastData = static::orderBy('kode', 'desc')->first();
        if ($lastData) {
            $lastNumber = (int)substr($lastData->kode, 1);
            return 'A' . str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        } else {
            return 'A01';
        }
    }

    public function normalisasi()
    {
        return $this->hasMany(Normalisasi::class);
    }
    public function penilaian()
    {
        return $this->hasMany(Penilaian::class);
    }
}
