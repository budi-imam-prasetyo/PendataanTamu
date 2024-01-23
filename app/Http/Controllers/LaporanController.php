<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('laporan.laporan');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function laporan_view()
    {
        //$data['tbl_laporan'] = Laporan::all();
        return view('laporan.add_laporan');
    }
    public function add_laporan(Request $request)
    {
        // // $data['tbl_laporan'] = Laporan::all();
        //  return view('laporan.add_laporan');

        $data=new Laporan;

        $data-> nama = $request-> nama;
        $data-> Hasil_Pertemuan = $request-> Hasil_pertemuan;
        $data-> save();
        return redirect()->back();

    }



    /**
     * Update the specified resource in storage.
     */
    public function edit_laporan(Request $request, $id)
    {
        $data['tbl_pertemuan'] = Pertemuan::all();
        return view('laporan.add_laporan', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_laporan($id)
    {
        $data=Laporan::find($id);

        $data->delete();
        return redirect()->back();
    }
}
