<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Smtp;
use Illuminate\Http\Request;

//BURAYI YAPACAKSIN
class SmtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Smtp::all();
        return view('admin.smtp.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.smtp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Smtp();
        $data->smtpName = $request->smtpName;
        $data->status = $request->status;

        $data->save();
        return redirect('admin/smtp/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function show(Smtp $smtp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function edit(Smtp $smtp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smtp $smtp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smtp $smtp)
    {
        //
    }
}
