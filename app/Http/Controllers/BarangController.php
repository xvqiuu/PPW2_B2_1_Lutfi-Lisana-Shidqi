<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Barang;

class BarangController extends Controller
{
    public function indes()
    {
        $data_barang = Barang::all();
        return view('barang.index', compact('data_barang'));

    }
}
