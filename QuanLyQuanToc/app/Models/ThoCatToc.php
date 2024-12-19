<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThoCatToc extends Model
{
    protected $table = '_tho_cat_toc';
    protected $fillable = [
        'IdTho',
        'TenTho',
        'Luong',
        'ChucVu',
      
    ];
}
