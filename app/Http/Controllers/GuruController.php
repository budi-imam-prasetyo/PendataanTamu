<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\detailUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        // $detail = detailUser::all();
        $mapel = Mapel::all();

        return view('guru.guru', compact('mapel'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $mapel = Mapel::find($request->PTK);

        $detail = new detailUser();
        $detail->id_user = $user->id;
        $detail->id_mapel = $mapel->id;
        $detail->NIP = $request->NIP;
        $detail->nama = $user->name;
        $detail->telp = $request->telp;
        $detail->email = $user->email;
        $detail->jk = $request->jk;
        $detail->tgl_lahir = $request->tanggal_lahir;
        $detail->status = $request->status;
        $detail->PTK = $mapel->nama;
        $detail->save();
        return redirect()->back()->with('message', 'Successfully');
    }
}