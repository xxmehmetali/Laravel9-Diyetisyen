<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">{{ $homePageProperties->navbarProperties->menuText->value  }}</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.html" class="nav-item nav-link active">{{ $homePageProperties->navbarProperties->homepageText->value }}</a>
                    <a href="about.html" class="nav-item nav-link">{{ $homePageProperties->navbarProperties->aboutUsText->value }}</a>
                    <a href="service.html" class="nav-item nav-link">{{ $homePageProperties->navbarProperties->servicesText->value }}</a>
                    <a href="prices.html" class="nav-item nav-link">{{ $homePageProperties->navbarProperties->pricesText->value }}</a>
                    <a href="location.html" class="nav-item nav-link">{{ $homePageProperties->navbarProperties->ourBranchesText->value }}</a>

                    <!-- Maximum 2 alt kategoriye iniyor -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Kategoriler</a>
                        <ul class="dropdown-menu">
                            @foreach($categoriesForNavbar as $rs)
                                <li><a class="dropdown-item" href="{{ route('home.treatmentListPage', [ 'categoryId' => $rs->id]) }}"> {{ $rs->title }} </a>
                                        <ul class="submenu dropdown-menu">
                                            @foreach($rs->getChildren as $child)
                                            <li><a class="dropdown-item" href="{{ route('home.treatmentListPage', [ 'categoryId' => $child->id]) }}">{{ $child->title }}</a></li>
                                            @endforeach
                                        </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <a href="contact.html" class="nav-item nav-link">{{ $homePageProperties->navbarProperties->contactUsText->value }}</a>
                </div>

                <div class="ml-auto">
                    @auth
                        <a class="btn btn-custom" href="{{ route('user.userPanel') }}">Panel</a>
                        <a class="btn btn-custom" href="{{ route('home.logout') }}">Çıkış Yap</a>
                        <a class="btn btn-custom" href="{{ route('user.basket', ['user_id' => Auth::user()->id]) }}">Sepet</a>
                    @endauth
                    @guest
                            <a class="btn btn-custom" href="{{ route('home.login') }}">Giriş Yap / Kayıt Ol</a>
                        @endguest
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
