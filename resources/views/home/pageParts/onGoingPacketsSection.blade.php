<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">Satın aldığım Paketlerim</h2>
    @foreach($onGoingPackets as $treatmentPacket)
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title">Paket : {{ $treatmentPacket->getTreatment->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Sipariş tarihi :{{ $treatmentPacket->orderDate }}</h6>
                <p class="card-text">Fiyat : {{ $treatmentPacket->price }}</p>
                <p class="card-text">Ödeme tipi : {{ $treatmentPacket->paymentType }}</p>
            </div>
        </div>
    @endforeach
</div>
