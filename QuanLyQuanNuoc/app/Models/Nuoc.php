<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nuoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'menu_id',
    ];

    public function setMenu()
    {
        return $this->belongsTo(Menu::class);
    }
}
