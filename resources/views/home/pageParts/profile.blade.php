<!-- Profile Start -->
@auth
<div class="container rounded bg-white mt-5 mb-5" style="border: 2px solid gray; padding: 40px; box-shadow: 10px 10px 8px #888888;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">

                        {{ Auth::user()->name }}

                </span>
                <span class="text-black-50">
                    {{ Auth::user()->email }}
                </span>
                <span> </span>
            </div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{ route('user.profileSave') }}" method="POST">
                    @csrf
                    <div class="row mt-3">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="col-md-12"><label class="labels">İsim ve Soyisim</label><input type="text" name="name" class="form-control" placeholder="{{ Auth::user()->name }}" value=""></div>
                            <div class="col-md-12"><label class="labels">Telefon Numarası</label><input type="text" name="phoneNumber" class="form-control" placeholder="{{ Auth::user()->getProfile->phoneNumber }}" value=""></div>
                            <div class="col-md-12"><label class="labels">Adres</label><input type="text" name="address" class="form-control" placeholder="{{ Auth::user()->getProfile->address }}" value=""></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="{{ Auth::user()->email }}" value=""></div>
                            <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" style="margin-left: 20px" value="Kaydet"></div>

                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
</div>
</div>
@endauth
<!-- Profile Ends -->
