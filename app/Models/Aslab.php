<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aslab extends Model
{
    use HasFactory;
    protected $table = 'aslabs';
    protected $guarded = ['id'];
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
