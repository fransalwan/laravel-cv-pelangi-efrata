<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Offer;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.offer.index', [
            'offers' => Offer::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.offer.create', [
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
            'tanggal' => 'required',
            'supplier_id' => 'required',
            'name' => 'required|max:255',
            'harga_per_kilo' => 'required',
            'berat' => 'required',
            'sub_total' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Offer::create($validatedData);

        return redirect('/dashboard/offer')->with('success', 'data pembelian berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('dashboard.offer.edit',[
            'offer' => $offer,
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $rules = [
            'tanggal' => 'required',
            'supplier_id' => 'required',
            'name' => 'required|max:255',
            'harga_per_kilo' => 'required',
            'berat' => 'required',
            'sub_total' => 'required'
        ];

        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Offer::where('id', $offer->id)
                ->update($validatedData);

        return redirect('/dashboard/offer')->with('success', 'Data Pembelian Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        Offer::destroy($offer->id);
    
        return redirect('/dashboard/offer')->with('success', 'Data Pembelian berhasil dihapus!');
    }

    public function cetakForm() {
        return view('dashboard.offer.cetak-offer-form', [
            'suppliers' => Supplier::all()
        ]);
    }

    public function cetakOfferPertanggal($tglawal, $tglakhir) {
        $cetakPertanggal = Offer::limit(100)->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('dashboard/offer/cetak-offer-pertanggal', compact('cetakPertanggal'));
    }

    public function downloadPDF($tglawal, $tglakhir) {
        $cetakPertanggal = Offer::limit(100)->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        $pdf = PDF::loadView('dashboard/offer/cetak-offer-pertanggal', compact('cetakPertanggal'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('penjualan.pdf');
    }
}
