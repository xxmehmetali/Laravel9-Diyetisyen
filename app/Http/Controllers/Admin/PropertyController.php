<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\property;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Property::all();
        return view('admin.property.index',[
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
        $settings = Setting::all();
        return view('admin.property.create', [
            'settings' => $settings
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
        $data = new Property();
        $data->key=$request->key;
        $data->value=$request->value;
        $data->settingId=$request->settingId;
        $data->status=$request->status;
        $data->save();
        return redirect('admin/property/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\property  $properties
     * @return \Illuminate\Http\Response
     */
    public function show(property $properties, $id)
    {/*
    $cars = Car::with(['brandDetails']);
    return view('car.car_listing',compact('cars'));
    */


        $data=Property::find($id);

        return view('admin.property.show',[
            'data' => $data,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\property  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(property $properties, $id)
    {
        $data=Property::find($id);
        $settings=Setting::all();
        return view('admin.property.edit',[
            'data' => $data,
            'id' => $id,
            'settings' => $settings
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $properties, $id)
    {
        $updatedAt = Carbon::now()->toDateTimeString();

        $data=Property::find($id);
        $data->key=$request->key;
        $data->value=$request->value;
        $data->settingId=$request->settingId;
        $data->status=$request->status;
        $data->updated_at=$updatedAt;
        $data->save();
        return redirect('/admin/property');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\property  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $properties, $id)
    {
        $data=Property::find($id);
        $data->delete();
        return redirect('/admin/property');
    }

}
