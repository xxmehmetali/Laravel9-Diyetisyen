<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faq::all();
        return view('admin.faq.index',[
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
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Faq();
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/faq');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faqs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faqs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faqs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faqs)
    {
        //
    }
}
