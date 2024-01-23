<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MapelController extends Controller
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
        $mapel = new Mapel();
        $mapel->nama = $request->nama;
        $mapel->save();

        return redirect()->back()->with('message', 'Mata pelajaran berhasil ditambahkan');
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
    public function show()
    {
        $mapel = Mapel::all();
        return view ('admin.mapel', compact('mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $namaToUpdate = $request->input('namaToUpdate');
        $mapel = Mapel::where('nama', $namaToUpdate)->first();

        // $mapel->nama = $request->newName;
        // $mapel->save();
        // return redirect()->back();   
        
        if ($mapel) {
            $mapel->nama = $request->newName;
            $mapel->save();
            return redirect()->back()->with('message', 'Mapel Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Mapel not found');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nama)
    {
        $mapel = Mapel::where('nama', $nama)->first();
        $mapel->delete();
        return redirect()->back()->with('message', 'Mapel Delete Successfully');
    }
}
