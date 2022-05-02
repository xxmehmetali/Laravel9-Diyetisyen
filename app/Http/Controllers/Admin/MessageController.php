<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\message;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Message::all();
        return view('admin.message.index',[
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
        $messages = Message::all();
        return view('admin.message.create', [
            'messages' => $messages
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
        $data = new Message();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->ip=$request->ip;
        $data->status=$request->status;
        $data->save();
        //  admin panelinden eklenirse :
        //return redirect('admin/message/create');

        //  contact.html sayfasından eklenirse :
        return redirect('contact.html');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(message $messages, $id)
    {
        $data=Message::find($id);

        return view('admin.message.show',[
            'data' => $data,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(message $messages, $id)
    {
        $data=Message::find($id);
        $messages=Message::all();
        return view('admin.message.edit',[
            'data' => $data,
            'id' => $id,
            'messages' => $messages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $messages, $id)
    {
        //  NOTE THAT IP DOESNT CHANGE !!
        $updatedAt = Carbon::now()->toDateTimeString();

        $data=Message::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->status=$request->status;
        $data->updated_at=$updatedAt;
        $data->save();
        return redirect('/admin/message');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $messages, $id)
    {
        $data=Message::find($id);
        $data->delete();
        return redirect('/admin/message');
    }

}
