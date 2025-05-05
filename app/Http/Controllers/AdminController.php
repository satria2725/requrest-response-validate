<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Admin::create($validated); // jika ada model

        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $validated
        ]);
    }
}
