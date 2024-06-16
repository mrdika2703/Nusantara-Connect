<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pustaka extends Model
{
    use HasFactory;
    protected $table = 'pustakas';

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'pustaka_daerah');
    }
}
