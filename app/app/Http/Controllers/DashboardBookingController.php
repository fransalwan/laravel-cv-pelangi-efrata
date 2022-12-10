<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Item;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardBookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.booking.index', [
            'bookings' => Booking::where('user_id', auth()->user()->id)->get(),
        ]);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.booking.create', [
            'pelanggans' => Pelanggan::all(),
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
            'pelanggan_id' => 'required',
            'name' => 'required',
            'harga_satuan' => 'required',   
            'jumlah' => 'required',
            'sub_total' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Booking::create($validatedData);

        return redirect('/dashboard/booking')->with('success', 'Data Penjualan berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking, Pelanggan $pelanggan)
    {
        return view('dashboard.booking.edit', [
            'booking' => $booking,
            'pelanggans' => $pelanggan,
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $rules = [
            'tanggal' => 'required',
            'pelanggan_id' => 'required',
            'name' => 'required',
            'harga_satuan' => 'required',
            'jumlah' => 'required',
            'sub_total' => 'required'
        ];


        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = auth()->user()->id;
        
        Booking::where('id', $booking->id)
                ->update($validatedData);

        return redirect('/dashboard/booking')->with('success', 'Data Penjualan Berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
            Booking::destroy($booking->id);
    
            return redirect('/dashboard/booking')->with('success', 'Data Penjualan berhasil dihapus!');
        
    }

    public function cetakForm() {
        return view('dashboard.booking.cetak-booking-form', [
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    public function cetakBookingPertanggal($tglawal, $tglakhir) {
        $cetakPertanggal = Booking::limit(100)->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('dashboard/booking/cetak-booking-pertanggal', compact('cetakPertanggal'));
    }

    public function downloadPDF($tglawal, $tglakhir) {
        $cetakPertanggal = Booking::limit(100)->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        $pdf = PDF::loadView('dashboard/booking/cetak-booking-pertanggal', compact('cetakPertanggal'));
        $pdf->setPaper('A4', 'potrait');
        return $pdf->stream('pemesanan.pdf');
    }

}
