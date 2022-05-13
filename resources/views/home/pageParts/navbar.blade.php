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
                    <a href="about.html" class="nav-item nav-link">Hakkımızda</a>
                    <a href="service.html" class="nav-item nav-link">Servisler</a>
                    <a href="prices.html" class="nav-item nav-link">Ücretler</a>
                    <a href="location.html" class="nav-item nav-link">Şubelerimiz</a>

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
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  First level 3  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> Second level 1 </a></li>
                            <li><a class="dropdown-item" href="#"> Second level 2 &raquo </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Second level  4</a></li>
                                    <li><a class="dropdown-item" href=""> Second level  5</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                            <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
                        </ul>
                    </li>
                    -->
                    <!--
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Detaylar</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog</a>
                            <a href="single.html" class="dropdown-item">Kısa Hakkımızda</a>
                            <a href="team.html" class="dropdown-item">Çalışanlarımız</a>
                            <a href="booking.html" class="dropdown-item">Randevu Alın</a>
                        </div>
                    </div>
                    -->

                    <a href="contact.html" class="nav-item nav-link">İletişim</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="#">Randevu Alın</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="login.html">Giriş Yap / Kayıt Ol</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
