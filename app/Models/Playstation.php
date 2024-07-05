<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    use HasFactory;

    protected $fillable = ['merk', 'foto', 'harga'];

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}
