<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.customer.index', [
            'customers' => Customer::where('user_id', auth()->user()->id)->get()
        ]);
    }

    // function order

    // Hubungkan Customer dengan order
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // masukkin proses disini

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required',
            'noHp' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Customer::create($validatedData);

        return redirect('/dashboard/customer')->with('success', 'Data Customer berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('dashboard.customer.edit',[
            'customer' => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $rules = [
            'name' => 'required|max:255',
            'alamat' => 'required',
            'noHp' => 'required',
        ];


        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Customer::where('id', $customer->id)
                ->update($validatedData);

        return redirect('/dashboard/customer')->with('success', 'Data Pelanggan Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
    
        return redirect('/dashboard/customer')->with('success', 'Data Pelanggan berhasil dihapus!');
    }
}
