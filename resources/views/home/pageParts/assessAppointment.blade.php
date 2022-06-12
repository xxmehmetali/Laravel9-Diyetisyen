<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">{{ $appointment->appointmentDate }} TARİHLİ RANDEVU</h2>
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <form action="{{ route('user.assessAppointmentAction') }}" method="post">
                @csrf
                <div class="card-body">
                    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                    <p class="card-text">Kilo : {{ $appointment->weight }}</p>
                    <input type="text" name="weight">
                    <p class="card-text">Nabız : {{ $appointment->pulseRate }}</p>
                    <input type="text" name="pulseRate">
                    <p class="card-text">Doktor Notu : {{ $appointment->doctorNote }}</p>
                    <input type="text" name="doctorNote">
                    <p class="card-text">Durum : {{ $appointment->status }}</p>
                    <select class="form-control" name="status">
                        <option value="Staged">Staged</option>
                        <option value="Online">Online</option>
                    </select>
                    <input type="submit" value="Değerlendir" class="btn btn-primary" style="margin-top: 10px">
                </div>
            </form>
        </div>
</div>
