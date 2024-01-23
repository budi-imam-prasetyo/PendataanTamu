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
        return view('admin.guru');
    }

    public function create(Request $request, $id)
    {
        $user = Auth::user();
        $mapel = Mapel::find($id);
        $detail = new detailUser();
        $detail->id_user = $user->id;
        $detail->id_mapel = $mapel->id;
        $detail->NIP = $request->NIP;
        $detail->nama = $user->name;
        $detail->telp = $request->telp;
        $detail->email = $user->email;
        $detail->jk = $request->jk;
        $detail->tgl_lahir = $request->tgl_lahir;
        $detail->status = $request->status;
        $detail->PTK = $request->PTK;
        $detail->save();
        return redirect()->back()->with('message', 'Successfully');
    }
}