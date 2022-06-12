<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">HASTALARIM</h2>
    @foreach($ordersRelatedToThisDoctor as $patient)
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title">Ad : {{ $patient->getUser->name }}</h5>
                <p class="card-text">Adres : {{ $patient->getUser->getProfile->address }}</p>
                <p class="card-text">{{ $patient->getUser->getProfile->phoneNumber }}</p>
                <p>Satın aldığı paketi gör : <a href="{{ route('user.patientAppointments',['doctor_id' => Auth::user()->id , 'patient_id'=>$patient->getUser->id]) }}" style="color:red"><button class="btn btn-primary">Pakete git</button></a></p>
            </div>
        </div>
    @endforeach
</div>
