<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        <h1>{{ $homePageProperties->topbarProperties->siteName->value }}</h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ $homePageProperties->topbarProperties->openingHoursText->value }}</h3>
                                <p>{{ $homePageProperties->topbarProperties->openingHoursHours->value }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ $homePageProperties->topbarProperties->callUsText->value }}</h3>
                                <p>{{ $homePageProperties->topbarProperties->callUsPhoneNumber->value }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>{{ $homePageProperties->topbarProperties->contactViaEmailText->value }}</h3>
                                <p>{{ $homePageProperties->topbarProperties->contactViaEmail->value }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->
