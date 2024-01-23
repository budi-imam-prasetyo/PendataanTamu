<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pertemuan;
use App\Models\detailUser;
use App\Models\Tamu;
use App\Models\User;

class PertemuanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pertemuan.pertemuan', ['user' => $user]);
    }

    public function create(Request $request, $id)
    {
        $tamu = Tamu::find($id);
        $detailUser = detailUser::find($id);
        $user = Auth::user();
        $pertemuan = new Pertemuan();
        $pertemuan->id_tamu = $tamu->id;
        $pertemuan->id_detail = $detailUser->id;
        $pertemuan->tanggal_waktu = now();
        $pertemuan->tujuan = $request->tujuan;
        $pertemuan->status = "belum diizinkan";
        $pertemuan->save();
        return redirect()->back()->with('message', 'Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
