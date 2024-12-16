<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Users::all();
        return view('users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Users::create([
            'user_nama' => $request->user_nama,
            'user_email' => $request->user_email,
            'user_pass' => $request->user_pass,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_pos' => $request->user_pos
        ]);

        return redirect('users');
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
    public function edit($id)
    {
        $row = Users::findOrFail($id);
        return view('users.edit', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'user_nama'=>'bail|required',
                'user_email'=>'required',
                'user_pass'=>'required',
                'user_alamat'=>'required',
                'user_hp'=>'required',
                'user_pos'=>'required'

            ],
            [
                'user_nama.required'=>'nama wajib diisi',
                'user_email.required'=>'email wajib diisi',
                'user_pass.required'=>'password wajib diisi',
                'user_alamat.required'=>'alamat wajib diisi',
                'user_hp.required'=>'hp wajib diisi',
                'user_pos.required'=>'pos wajib diisi'
            ]
            );

            $row = Users::findOrFail($id);
            $row->update([
                'user_nama'=>$request->user_nama,
                'user_email'=>$request->user_email,
                'user_pass'=>$request->user_pass,
                'user_alamat'=>$request->user_alamat,
                'user_hp'=>$request->user_hp,
                'user_pos'=>$request->user_pos
            ]);

            return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Users::findOrFail($id);
        $row->delete();

        return redirect('users');
    }
}