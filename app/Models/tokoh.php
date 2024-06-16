<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokoh extends Model
{
    use HasFactory;
    protected $table = 'tokohs';

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class, 'tokoh_daerah');
    }
}
