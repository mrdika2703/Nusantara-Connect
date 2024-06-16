<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsis';

    public function tokoh()
    {
        return $this->hasMany(tokoh::class, 'tokoh_daerah');
    }
    public function pustaka()
    {
        return $this->hasMany(pustaka::class, 'pustaka_daerah');
    }
    public function liputan()
    {
        return $this->hasMany(liputan::class, 'liputan_daerah');
    }
}
