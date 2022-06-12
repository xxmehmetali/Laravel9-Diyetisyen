<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">RANDEVULAR</h2>
    @foreach($allAppointments as $appointment)
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title">{{ $appointment->appointmentDate }} Tarihli Randevu</h5>
                <p class="card-text">Kilo : {{ $appointment->weight }}</p>
                <p class="card-text">Nabız : {{ $appointment->pulseRate }}</p>
                <p class="card-text">Doktor Notu : {{ $appointment->doctorNote }}</p>
                <p class="card-text">Durum : {{ $appointment->status }}</p>
                <p><a href="{{ route('user.assessAppointment', ['appointment_id' => $appointment->id]) }}" style="color:red"><button class="btn btn-primary">Değerlendir</button></a></p>
            </div>
        </div>
    @endforeach

</div>
