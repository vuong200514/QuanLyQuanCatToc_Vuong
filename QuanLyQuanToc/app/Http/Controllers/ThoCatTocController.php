<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThoCatTocController extends Controller
{
    
    public function listThoCatToc(){
        $listtho = listThoCatToc::all();
        return view('ThoCatToc', compact('listThoCatToc'));
    }
}
