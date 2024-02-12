<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    //
    public function index()
    {
        // $tamu = User::where('role', 'tamu')->get();
        // $admin = User::where('role', 'admin')->get();
        // $allUser = User::all();
        $guru = User::where('role', 'guru')->paginate(10);
        return view('admin.admin1', compact('guru'))->with('currentPage', 'guru');
    }



    public function profile()
    {
        return view('admin.profileAdmin');
        // $guru = User::where('role', 'guru')->get();
        // $tamu = User::where('role', 'tamu')->get();
        // $admin = User::where('role', 'admin')->get();
        // $allUser = User::all();
        // return view('admin.admin1', compact('guru', 'allUser', 'admin', 'tamu'))->with('currentPage', 'guru');
    }

    public function viewGuru()
    {
        // $guru = User::where('role', 'guru')->get();
        // return view('admin.guru', compact('guru'));
    }

    public function addGuru(Request $request)
    {
        $guru = new User;

        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->password = $request->password;
        $guru->role = "guru";
        $guru->save();
        return redirect()->back();
    }

    public function updateGuru(Request $request)
    {

        $emailToUpdate = $request->input('emailToUpdate');
        $guru = User::where('email', $emailToUpdate)->first();

        $guru->name = $request->newName;
        $guru->email = $request->newEmail;
        $guru->password = $request->newPassword;
        $guru->save();
        return redirect()->back();
    }

    public function deleteGuru($email)
    {
        $guru = User::where('email', $email)->first();
        $guru->delete();
        return redirect()->back();
    }

    public function mapel()
    {
        $mapel = Mapel::all();
        return view('admin.mapel', compact('mapel'));
    }
}