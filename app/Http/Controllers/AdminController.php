<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin1');
    }

    public function viewGuru()
    {
        $guru = User::where('role', 'guru')->get();
        return view('admin.guru', compact('guru'));
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
}