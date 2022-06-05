<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => ["guest"]], function () {
	Route::get("/login", "AdminController@login");
	Route::post("/signin", "AdminController@signin");
});

Route::group(["middleware" => ["admin"]], function () {
	Route::get("/dashboard", function () {
		return view("content.dashboard");
	});

	// Data Kategori
	Route::get("/kategori", "KategoriController@data_kategori");
	Route::post("/simpan_data_kategori", "KategoriController@simpan_data_kategori");
	Route::get("/delete_kategori/{id}/delete", "KategoriController@delete_kategori");
	Route::get("/edit_kategori/{id}/edit", "KategoriController@edit_kategori");
	Route::post("/update_kategori", "KategoriController@update_kategori");

	//Data meja
	Route::get("/meja", "MejaController@data_meja");
	Route::post("/simpan_data_meja", "MejaController@simpan_data_meja");
	Route::get("/delete_meja/{id}/delete", "MejaController@delete_meja");
	Route::get("/edit_meja/{id}/edit", "MejaController@edit_meja");
	Route::post("/update_meja", "MejaController@update_meja");	

	// Data Menu
	Route::get("/menu", "MenuController@data_menu");
	Route::post("/simpan_data_menu", "MenuController@simpan_data_menu");
	Route::get("/delete_menu/{id}/delete", "MenuController@delete_menu");
	Route::get("/edit_menu/{id}/edit", "MenuController@edit_menu");
	Route::post("/update_menu", "MenuController@update_menu");

	// Data Pemesanan Menu
	Route::get("/pesanan_menu", "PesananController@pesanan_menu");
	Route::get("/detail_menu/{id}/detail", "PesananController@detail_menu");
	Route::post("/simpan_data_pesanan_menu", "PesananController@simpan_data_pesanan_menu");
	Route::get("/data_pesanan", "PesananController@data_pesanan");
	Route::post("/update_data_pesanan", "PesananController@update_data_pesanan");
	Route::get("/delete_pesanan/{id}/delete", "PesananController@delete");
	Route::get("/data_pesan_menu", "PesananController@data_pesan_menu");
	Route::post("/simpan_data_pemesanan_menu", "PesananController@simpan_data_pemesanan_menu");

	// Data Transaksi
	Route::get("/transaksi", "TransaksiController@transaksi");
	Route::get("/bayar_transaksi/{id}/bayar", "TransaksiController@bayar");
	Route::post("/simpan_data_bayar_transaksi", "TransaksiController@simpan_data_bayar_transaksi");
	Route::get("/pembayaran_transaksi", "TransaksiController@pembayaran_transaksi");
	Route::get("/detail_pembayaran/{id}/detail", "TransaksiController@detail_pembayaran");

	// Data Users
	Route::get("/users", "AdminController@users");
	Route::post("/simpan_data_users", "AdminController@simpan_data_users");
	Route::get("/logout", "AdminController@logout");
});

Route::get("/layouts", "AppController@layouts");