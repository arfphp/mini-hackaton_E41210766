<?php

namespace App\Http\Controllers;

use App\Models\PenjualanBB;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Kode ini mengembalikan tampilan (view) dengan nama 'HalPenjualan' dan mengirimkan data penjualan ke tampilan tersebut.
        // Data penjualan diperoleh dengan menggunakan metode get() pada model PenjualanBB.
        return view('HalPenjualan', [
            'tampil' => PenjualanBB::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //membuat objek baru dari model PenjualanBB
        $tampilHasil = new PenjualanBB();
        //kiri dari db kanan dari form
        $tampilHasil->jenis_batu_bata = $request->jenis_batu_bata;
        $tampilHasil->harga = $request->harga;
        $tampilHasil->stock = $request->stock;
        $tampilHasil->terjual = $request->terjual;
        // menyimpan nilai
        $tampilHasil->save();

        return view('HalPenjualan', [
            'tampil' => PenjualanBB::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Kode ini mencari data penjualan berdasarkan $id yang diberikan.
        // Data tersebut kemudian dikirimkan ke tampilan 'HalEditPenjualan' untuk proses pengeditan atau pembaruan data penjualan.
        $edit = PenjualanBB::find($id);
        return view('HalEditPenjualan', [
            'editData' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //membuat objek baru dari model PenjualanBB
        $updateHasil = PenjualanBB::find($id);
        //kiri dari db kanan dari form
        $updateHasil->jenis_batu_bata = $request->jenis_batu_bata;
        $updateHasil->harga = $request->harga;
        $updateHasil->stock = $request->stock;
        $updateHasil->terjual = $request->terjual;
        //menyimpan nilai
        $updateHasil->save();

        // mengarahkan ke route yang bernama hal_utama
        return redirect()->route('hal_utama');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Kode ini mencari data penjualan berdasarkan $id yang diberikan.
        // Setelah itu, metode delete() digunakan untuk menghapus data penjualan yang ditemukan.
        $destroys = PenjualanBB::find($id);
        $destroys->delete();

        // mengarahkan ke route yang bernama hal_utama
        return redirect()->route('hal_utama');
    }
}
