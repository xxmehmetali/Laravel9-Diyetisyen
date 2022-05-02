<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\treatment;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = treatment::all();
        return view('admin.treatment.index',[
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
        $allCategories = Category::all();
        return view('admin.treatment.create',[
            'allCategories' => $allCategories
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
        $data = new treatment();

        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->categoryId=$request->categoryId;
        $data->detail=$request->detail;
        $data->price=$request->price;
        $data->frequency=$request->frequency;
        $data->duration=$request->duration;
        $data->userId= 2; //BURASI DEĞİŞECEK
        $data->status=$request->status;

        $data->save();
        return redirect('admin/treatment/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\treatment  $treatments
     * @return \Illuminate\Http\Response
     */
    public function show(treatment $treatments, $id)
    {
        $data=treatment::find($id);
        return view('admin.treatment.show',[
            'data' => $data,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\treatment  $treatments
     * @return \Illuminate\Http\Response
     */
    public function edit(treatment $treatments, $id)
    {
        $data=treatment::find($id);
        $allCategories = Category::all();
        return view('admin.treatment.edit',[
            'data' => $data,
            'allCategories' => $allCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\treatment  $treatments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, treatment $treatments, $id)
    {
        $updatedAt = Carbon::now()->toDateTimeString();
        $data=treatment::find($id);

        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->categoryId = $request->categoryId;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->frequency = $request->frequency;
        $data->duration = $request->duration;
        //  USERID IS NOT CHANGED !
        $data->status = $request->status;

        $data->save();
        return redirect('/admin/treatment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\treatment  $treatments
     * @return \Illuminate\Http\Response
     */
    public function destroy(treatment $treatments, $id)
    {
        $data=treatment::find($id);
        if($data->image)
            Storage::delete($data->image);
        $data->delete();
        return redirect('/admin/treatment');
    }
}
