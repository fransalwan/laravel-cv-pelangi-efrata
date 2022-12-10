<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking_offer_form', [
            "title" => "Pemesanan dan Penawaran"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required','string','max:255'],
            // 'alamat' => ['required','string','max:255'],
            'email' => ['required', 'email:filter', 'max:255'],
            'NoHp' => ['required','string','max:255'],
            'message' => ['required', 'string']
        ]);
        if($validation->fails()) {
            return response()->json(['code' => 400, 'msg' => $validation->errors()->first()]);
        }

       $name        = $request->name;
       $alamat      = $request->alamat;
       $email       = $request->email;
       $NoHp        = $request->NoHp;
       $msg         = $request->message;
        
       $msg = "
        Name: $name \n
        Alamat: $alamat \n
        Email: $email \n
        No Handpone: $NoHp \n
        Message: $msg \n
        ";

        $receiver = "fransalwan55@gmail.com";
        Mail::to($receiver)->send(new ContactMail($msg));
        return response()->json(['code' => 200, 'msg' => 'Terimakasih sudah menghubungi kami, kami akan merespon permintaan anda secepatnya']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
