<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Appointment::all();
        return view('admin.appointment.index',[
            'data' => $data
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\appointment  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointments, $id)
    {
        $data=Appointment::find($id);
        return view('admin.appointment.show',[
            'data' => $data,

        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\appointment  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment, $id)
    {
        $data=Appointment::find($id);
        $data->delete();
        return redirect('/admin/appointment');
    }
}
