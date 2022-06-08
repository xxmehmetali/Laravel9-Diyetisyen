<div class="d-flex" style="justify-content: space-around; margin-top: 30px; margin-bottom: 20px">
    <div class="card" style="width: 18rem; display: inline-block">
        <img src="{{ asset('assets') }}/img/profile-transparent.png" class="card-img-top" alt="...">
        <div class="card-body">
            <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.profile', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Profilim</a></button>
        </div>
    </div>
    <div class="card" style="width: 18rem;display: inline-block">
        <img src="{{ asset('assets') }}/img/my-orders.png" class="card-img-top" alt="...">
        <div class="card-body">
            <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.profile', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Siparişlerim</a></button>
        </div>
    </div>
    <div class="card" style="width: 18rem;display: inline-block">
        <img src="{{ asset('assets') }}/img/reviews.png" class="card-img-top" alt="...">
        <div class="card-body">
            <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.profile', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Yorumlarım</a></button>
        </div>
    </div>
    <div class="card" style="width: 18rem;display: inline-block">
        <img src="{{ asset('assets') }}/img/on-going-packets.png" class="card-img-top" alt="...">
        <div class="card-body">
            <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.profile', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Devam Eden Paketlerim</a></button>
        </div>
    </div>

</div>
