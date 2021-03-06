</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ asset('assets') }}/admin/img/find_user.png" class="user-image img-responsive"/>
            </li>

            <li>
                <a  href="{{ route('admin.faq.index') }}"><i class="fa fa-dashboard fa-3x"></i>Faq</a>
            </li>
            <li>
                <a href="{{ route('admin.message.index') }}"><i class="fa-solid fa-message fa-3x"></i>Messages</a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}"><i class="fa fa-list-alt fa-3x" aria-hidden="true"></i>Categories</a>
            </li>

            <li>
                <a href="{{ route('admin.treatment.index') }}"><i class="fa fa-medkit fa-3x" aria-hidden="true"></i>Treatments</a>
            </li>

            <li>
                <a href="{{ route('admin.setting.index') }}"><i class="fa fa-sitemap fa-3x"></i> Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.property.index') }}">Properties</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.smtp.index') }}">SMTP Mail Service</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.socialMedia.index') }}">Social Media</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.faq.index') }}"><i class="fa fa-question-circle fa-3x" aria-hidden="true"></i>Faqs</a>
            </li>

            <li>
                <a href="{{ route('admin.user.index') }}"><i class="fa fa-user fa-3x" aria-hidden="true"></i>Users</a>
            </li>

            <li>
                <a href="{{ route('admin.comment.index') }}"><i class="fa fa-comment fa-3x" aria-hidden="true"></i>Comments</a>
            </li>

            <li>
                <a href="{{ route('admin.appointment.index') }}"><i class="fa fa-calendar fa-3x" aria-hidden="true"></i>Appointments</a>
            </li>

            <!-- BURADAN DEVAM ET -->

{{--            <li>--}}
{{--                <a  href="ui.html"><i></i> XXXXXXXXXXXXX</a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>--}}
{{--            </li>--}}

{{--            <li  >--}}
{{--                <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>--}}
{{--            </li>--}}

{{--            <li  >--}}
{{--                <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>--}}
{{--            </li>--}}

{{--            <li  >--}}
{{--                <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>--}}
{{--            </li>--}}


{{--            <li>--}}
{{--                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
{{--                <ul class="nav nav-second-level">--}}
{{--                    <li>--}}
{{--                        <a href="#">Second Level Link</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Second Level Link</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Second Level Link<span class="fa arrow"></span></a>--}}
{{--                        <ul class="nav nav-third-level">--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Link</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Link</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Third Level Link</a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}

{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li  >--}}
{{--                <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>--}}
{{--            </li>--}}
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->
