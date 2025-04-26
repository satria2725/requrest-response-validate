<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'phone'   => 'required|digits_between:10,15',
            'message' => 'required|string|min:10',
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
    }
}
