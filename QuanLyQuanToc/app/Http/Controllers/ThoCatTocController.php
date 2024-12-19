<?php

namespace App\Http\ThoCatToc;

use Illuminate\Http\Request;

class ThoCatTocController extends Controller
{
    
    public function listThoCatToc(){
        $listThoCatToc = ThoCatToc::all();
        return view('ThoCatToc', compact('listThoCatToc'));
    }
}
