<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name','mota'];

    public function getNuocs()
    {
        return $this->hasMany(Nuoc::class);
    }
}
