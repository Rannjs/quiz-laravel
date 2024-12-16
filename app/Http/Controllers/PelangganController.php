<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\Users;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Golongan::all();
        $rows = Users::all();
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rows['data_gol'] = Golongan::all();
        $rows['data_users'] = Users::all();
        return view('pelanggan.create', compact('rows'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'pel_gol_id' => $request->pel_gol_id,
            'pel_user_id' => $request->pel_user_id,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif
        ]);

        return redirect('pelanggan');
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
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'pel_no'=>'bail|required',
                'pel_nama'=>'required',
                'pel_alamat'=>'required',
                'pel_hp'=>'required',
                'pel_ktp'=>'required',
                'pel_seri'=>'required',
                'pel_meteran'=>'required',
                'pel_aktif'=>'required'
            ],
            [
                'pel_no.required'=>'no wajib diisi',
                'pel_nama.required'=>'nama wajib diisi',
                'pel_alamat.required'=>'alamat wajib diisi',
                'pel_hp.required'=>'no hp wajib diisi',
                'pel_ktp.required'=>'ktp wajib diisi',
                'pel_seri.required'=>'seri wajib diisi',
                'pel_meteran.required'=>'meteran wajib diisi',
                'pel_aktif.required'=>'aktif wajib diisi'
            ]
            );
            $row = Pelanggan::findOrFail($id);
            $row->update([
                'pel_no' => $request->pel_no,
                'pel_nama' => $request->pel_nama,
                'pel_alamat' => $request->pel_alamat,
                'pel_hp' => $request->pel_hp,
                'pel_ktp' => $request->pel_ktp,  
                'pel_seri' => $request->pel_seri, 
                'pel_meteran' => $request->pel_meteran, 
                'pel_aktif' => $request->pel_aktif 
            ]);
        
            return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}