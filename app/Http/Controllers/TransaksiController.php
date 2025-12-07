<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function create()
    {
        // Nanti di sini isi form transaksi
        return view('transaksi.create');
    }

    public function index()
    {
        return view('transaksi.index');
    }
}