<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all(); 
        return view('template/barang', compact('barangs'));
    }

    public function edit(){
        $barangs = Barang::all();
        return view('template/edit_barang', compact('barangs'));
    }
}
