<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::get('produk', function () {
  $kode = ['BRG001', 'BRG002', 'BRG003', 'BRG004', 'BRG005'];
  $nama = ['Pena', 'Buku', 'Pensil', 'Penghapus', 'Penggaris'];
  $jenis = count($kode);
  $harga = ['20000', '15000', '17000', '11500', '12000'];
  return view('produk', compact('kode', 'nama', 'jenis', 'harga'));
});
