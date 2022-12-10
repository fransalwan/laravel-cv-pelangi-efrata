<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.supplier.index', [
            'supplier' => Supplier::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.supplier.create', [
            'suppliers' => Supplier::all()
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

        Supplier::create($validatedData);

        return redirect('/dashboard/supplier')->with('success', 'Data Supplier Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('dashboard.supplier.edit',[
            'supplier' => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $rules = [
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'NoHp' => 'required',
            'email' => 'required',
        ];

        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Supplier::where('id', $supplier->id)
                ->update($validatedData);

        return redirect('/dashboard/supplier')->with('success', 'Data Supplier Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        Supplier::destroy($supplier->id);
    
        return redirect('/dashboard/supplier')->with('success', 'Data Supplier berhasil dihapus!');
    }
}
