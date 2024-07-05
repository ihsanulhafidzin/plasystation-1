<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'foto_ktp', 'alamat', 'playstation_id', 'status'
    ];

    public function playstations()
    {
        return $this->hasMany(Playstation::class);
    }
}
