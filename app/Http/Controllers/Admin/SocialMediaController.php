<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SocialMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SocialMedia::all();
        return view('admin.socialMedia.index', [
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
        return view('admin.socialMedia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new SocialMedia();
        $data->name = $request->name;
        $data->link = $request->link;
        $data->settingId = Setting::where('settingName', 'socialMedia')->get()[0]->id;

        $data->save();
        return redirect('admin/socialMedia/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(socialMedia $socialMedias,  $id)
    {
        $data = SocialMedia::find($id);
        return view('admin.socialMedia.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting, $id)
    {
        $data=SocialMedia::find($id);
        return view('admin.socialMedia.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedias, $id)
    {
        $updatedAt = Carbon::now()->toDateTimeString();

        $data=SocialMedia::find($id);
        $data->name=$request->name;
        $data->link=$request->link;
        $data->updated_at = $updatedAt;

        $data->save();
        return redirect('/admin/socialMedia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia, $id)
    {
        $data=SocialMedia::find($id);
        $data->delete();
        return redirect('/admin/socialMedia');
    }
}
