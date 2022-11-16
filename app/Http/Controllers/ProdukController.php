<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produk')->get();
        return view('produk', ['produk' => $produk]);
    }

    public function show_eloquent()
    {
        $produk = kategori::all();

        return view('tampilan', ['produk' => $produk]);
    }
    public function insert_eloquent()
    {
        kategori::create(['Nama' => 'Harga beli', 'Harga jual'
        => 540000]);
    }

    public function update_eloquent()
    {
        kategori::where('id', 2)
            ->update(['harga jual' => '330000',]);
    }
}