<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';
    protected $fillable = ['biodata_id', 'jenjang', 'institusi', 'tahun_masuk', 'tahun_lulus'];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class);
    }
}
