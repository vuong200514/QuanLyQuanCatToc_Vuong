<?php

namespace App\Http\Controllers;


use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function listMenu(){
        $menus = Menu::all();
        return view('Menu', compact('menus'));
    }
}
