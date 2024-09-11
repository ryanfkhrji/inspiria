<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:3|max:255',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/masuk')->with(['success' => 'Pendaftaran berhasil, silahkan login!']);
    }
}
