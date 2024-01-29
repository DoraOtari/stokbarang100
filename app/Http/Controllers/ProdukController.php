<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function tampilProduk()
    {
        return view('produk.index');
    }

    public function simpanProduk(Request $req)
    {
        Produk::create([
            'kode_barang' => $req->kode_barang,
            'nama' => $req->nama,
            'supplier' => $req->supplier,
            'qty' => $req->qty,
            'harga' => $req->harga,
        ]);

        return redirect('/produk')->with('pesan', 'berhasil tambah produk');
    }
}
