<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liputan extends Model
{
    use HasFactory;
    protected $table = 'liputans';

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'liputan_daerah');
    }
    
    protected $fillable = [
        'jenis_budaya',
        'liputan_daerah',
        'nama_liputan',
        'penjelasan_liputan',
        'gambar_liputan',
    ];
}
