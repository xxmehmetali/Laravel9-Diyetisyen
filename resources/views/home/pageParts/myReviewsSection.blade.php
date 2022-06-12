<div class="reviews" style="margin-top: 30px">
    <h2 style="text-align: center">YORUMLARIM</h2>
    @foreach($comments as $comment)
        <div class="card" style="width: 50%; margin: auto; margin-top: 10px">
            <div class="card-body">
                <h5 class="card-title">Konu : {{ $comment->subject }}</h5>
                <h6>DURUM :
                    @if($comment->status=="Staged")
                        Onay Bekliyor
                    @else
                        Onaylandı
                    @endif
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">Tedavi Paketi :{{ $comment->getTreatment->title }}</h6>
                <p class="card-text">Yorum : {{ $comment->comment }}</p>
                <p class="card-text">{{ $comment->created_at }}</p>
            </div>
        </div>
    @endforeach
</div>
