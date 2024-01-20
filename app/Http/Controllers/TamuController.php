<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        $id_user = $user->id;
        $nama_tamu = $user->name;
        $alamat_tamu = $request->alamat_tamu;
        $no_telp_tamu = $request->no_telp_tamu;
        $email_tamu = $user->email;

        $tamu = new Tamu();
        $tamu->id_user = $id_user;
        $tamu->nama_tamu = $nama_tamu;
        $tamu->alamat_tamu = $alamat_tamu;
        $tamu->no_telp_tamu = $no_telp_tamu;
        $tamu->email_tamu = $email_tamu;
        $tamu->save();
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
