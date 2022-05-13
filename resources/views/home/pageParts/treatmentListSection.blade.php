<div class="container-fluid d-flex justify-content-center">
    <div class="row mt-5">
        <div class="col-md-3">

            <div class="filter">
                <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="false" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
            </div>
            <div id="mobile-filter">
                <div>
                    <h6 class="p-1 border-bottom">Home Furniture</h6>
                    <ul>
                        <li><a href="#">Living</a></li>
                        <li><a href="#">Dining</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Bedroom</a></li>
                        <li><a href="#">Kitchen</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="p-1 border-bottom">Filter By</h6>
                    <p class="mb-2">Color</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                                <span class="fa fa-circle pr-1" id="red"></span>Red
                            </a></li>
                        <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                                <span class="fa fa-circle pr-1" id="teal"></span>Teal
                            </a></li>
                        <li class="list-group-item list-group-item-action mb-2 rounded"><a href="#">
                                <span class="fa fa-circle pr-1" id="blue"></span>Blue
                            </a></li>
                    </ul>
                </div>
                <div>
                    <h6>Type</h6>
                    <form class="ml-md-2">
                        <div class="form-inline border rounded p-sm-2 my-2">
                            <input type="radio" name="type" id="boring">
                            <label for="boring" class="pl-1 pt-sm-0 pt-1">Boring</label>
                        </div>
                        <div class="form-inline border rounded p-sm-2 my-2">
                            <input type="radio" name="type" id="ugly">
                            <label for="ugly" class="pl-1 pt-sm-0 pt-1">Ugly</label>
                        </div>
                        <div class="form-inline border rounded p-md-2 p-sm-1">
                            <input type="radio" name="type" id="notugly">
                            <label for="notugly" class="pl-1 pt-sm-0 pt-1">Not Ugly</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row mt-5">
                @foreach($data as $rs)
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <img src="{{ Storage::url($rs->image) }}" class="card-img-top" width="100%">
                            <div class="card-body pt-0 px-0">
                                <div class="d-flex flex-row justify-content-between mb-0 px-3" style="margin-top: 10px;">
                                    <small class="mt-1">FIYAT</small>
                                    <h6>₺{{ $rs->price }}</h6>
                                </div>
                                <hr class="mt-2 mx-3">
                                <div class="d-flex flex-row justify-content-between px-3 pb-4">
                                    <div class="d-flex flex-column"><span>Paket</span></div>
                                    <div class="d-flex flex-column"><h5 class="mb-0">{{ $rs->title }}</h5></div>
                                </div>
                                <div class="d-flex flex-row justify-content-between p-3 mid">
                                    <div class="d-flex flex-column"><small class="text-muted mb-1">Süreç</small><div class="d-flex flex-row"><i class='far fa-calendar-alt' style='font-size:18px'></i><div class="d-flex flex-column ml-1 flex-center"><small class="ghj">{{ $rs->duration }} Hafta</small></div></div></div>
                                    <div class="d-flex flex-column"><small class="text-muted mb-2">Sıklık</small><div class="d-flex flex-row"><i class="fa fa-signal" aria-hidden="true" style="font-size: 15px;"></i><small class="ml-1 ghj">{{ $rs->frequency }} Ay</small></div></div>
                                </div>
                                <div class="mx-3 mt-3 mb-2"><button type="button" class="btn btn-danger btn-block" onclick="location.href='{{ route('home.treatmentDetailPage', ['id' => $rs->id]) }}';"><small>INCELE</small></button></div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>


    </div>
</div>
