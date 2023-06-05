<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $table = 'labs';
    protected $guarded = [];
    public function aslab()
    {
        return $this->hasMany(Aslab::class);
    }
}
