<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">HASTA : {{ $specificAppointments[0]->getUser->name }} 'ın benden aldığı paketler</h2>
    @foreach($specificAppointments as $order)
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title">PAKET : {{ $order->getTreatment->title }}</h5>
                <p><a href="{{ route('user.allAppointments', ['order_id' => $order->id]) }}" style="color:red"><button class="btn btn-primary">Randevuları görüntüle</button></a></p>
            </div>
        </div>
    @endforeach
</div>
