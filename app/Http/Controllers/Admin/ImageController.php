<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\image;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($treatmentId)
    {
        $data = Treatment::where('id', $treatmentId)->first();
        return view('admin.image.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($treatmentId)
    {
        $data = Treatment::where('id', $treatmentId)->first();
        return view('admin.image.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $treatmentId)
    {
        $data = new Image();
        $data->title=$request->title;
        $data->treatmentId=$request->treatmentId;
        if($request->file('image')){
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/image/'.$data->treatmentId);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\image  $images
     * @return \Illuminate\Http\Response
     */
    public function show(image $images, $id, $treatmentId)
    {
        // EMPTY !
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\image  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(image $images, $id, $treatmentId)
    {
        //  EMPTY !!
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\image  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image $images, $id, $treatmentId)
    {
        //  EMPTY !!

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\image  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(image $images, $id, $treatmentId)
    {
        $data=image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image))
            Storage::delete($data->image);
        $data->delete();
        return redirect('/admin/image/'.$treatmentId);
    }
}
