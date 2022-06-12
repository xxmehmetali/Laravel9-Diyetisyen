
@auth()
{{--    For Patients --}}
<div style=" margin:30px;margin-left: 60px;">
    <h1>Merhaba, {{ Auth::user()->name }}</h1>
    <h6>Rolleriniz : </h6>
    @foreach(Auth::user()->getRoles as $role)
        <b>{{ $role->name }} / </b>
    @endforeach
</div>

    <div class="d-flex" style="justify-content: space-around; margin-top: 30px; margin-bottom: 20px">


        <div class="card" style="width: 18rem; display: inline-block">
            <img src="{{ asset('assets') }}/img/profile-transparent.png" class="card-img-top" alt="...">
            <div class="card-body">
                <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.profile') }}" style="text-decoration: none; color:white">Profilim</a></button>
            </div>
        </div>

        @foreach(Auth::user()->getRoles as $role)
            @if($role->name == "patient")
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/my-orders.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('home.myOrders', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Siparişlerim</a></button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/reviews.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('user.myReviews', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Yorumlarım</a></button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/on-going-packets.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('user.onGoingPackets', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Devam Eden Paketlerim</a></button>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach(Auth::user()->getRoles as $role)
            @if($role->name == "doctor")
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/create_treatment.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('user.createTreatmentByDoctor', ['user_id' => $user_id]) }}" style="text-decoration: none; color:white">Paket Oluştur</a></button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/my_patients.png" class="card-img-top" alt="..." style="height: 300px">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('user.myPatients', ['doctor_id' => $user_id]) }}" style="text-decoration: none; color:white">Hastalarım</a></button>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach(Auth::user()->getRoles as $role)
            @if($role->name == "admin")
                <div class="card" style="width: 18rem;display: inline-block">
                    <img src="{{ asset('assets') }}/img/admin_panel.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" style="width: 100%" class="btn btn-info"><a href="{{ route('admin.index') }}" style="text-decoration: none; color:white">Admin Paneline Gir</a></button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endauth
