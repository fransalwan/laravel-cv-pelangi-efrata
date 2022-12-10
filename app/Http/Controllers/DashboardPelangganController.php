<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pelanggan.index', [
            'pelanggans' => Pelanggan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelanggan.create', [
            'pelanggans' => Pelanggan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'NoHp' => 'required',
            'email' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Pelanggan::create($validatedData);

        return redirect('/dashboard/pelanggan')->with('success', 'Data Pelanggan Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('dashboard.pelanggan.edit',[
        'pelanggans' => $pelanggan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggan $pelanggan)
    {
        $rules = [
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'NoHp' => 'required',
            'email' => 'required',
        ];

        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Pelanggan::where('id', $pelanggan->id)
                ->update($validatedData);

        return redirect('/dashboard/pelanggan')->with('success', 'Data Pelanggan Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::destroy($pelanggan->id);
    
        return redirect('/dashboard/pelanggan')->with('success', 'Data Pelanggan berhasil dihapus!');
    }
}
