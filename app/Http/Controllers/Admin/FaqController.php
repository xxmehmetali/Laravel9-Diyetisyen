<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        return redirect('admin/faq/create');

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
    public function edit(faq $faqs, $id)
    {
        $data=Faq::find($id);
        return view('admin.faq.edit',[
            'data' => $data,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faqs, $id)
    {
        $updatedAt = Carbon::now()->toDateTimeString();

        $data=Faq::find($id);
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->updated_at=$updatedAt;
        $data->save();
        return redirect('/admin/faq');

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
