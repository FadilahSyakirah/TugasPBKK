<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('Template/menu', compact('menus'));
    }

    public function edit(){
        $menus = Menu::all();
        return view('Template/menu', compact('menus'));
    }
}
