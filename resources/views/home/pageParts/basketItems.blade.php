
@auth()
    @foreach($basketItems as $basketItem)
        <form action="{{ route('user.payment') }}" method="post" class="basketItem">
            @csrf
            <input type="hidden" name="patient_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="dietitian_id" value="{{ $basketItem->getTreatment->getUser->id }}">
            <input type="hidden" name="treatment_id" value="{{ $basketItem->getTreatment->id }}">
            <input type="hidden" name="price" value="{{ $basketItem->getTreatment->price }}">
            <input type="hidden" name="frequency" value="{{ $basketItem->getTreatment->frequency }}">
            <input type="hidden" name="duration" value="{{ $basketItem->getTreatment->duration }}">

            <div class="card mb-3 ">
                <img src="{{ Storage::url($basketItem->getTreatment->image) }}" class="card-img-top basketItemImage" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $basketItem->getTreatment->title }} / {{ $basketItem->getTreatment->price }}</h5>
                    <p class="card-text">{!! $basketItem->getTreatment->description !!}</p>
                    <p class="card-text"><small class="text-muted">{{ $basketItem->getTreatment->created_at }}</small></p>
                    <input type="submit" value="Paketi Satın Al">
                </div>
            </div>
        </form>
    @endforeach
@endauth

