<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- User profile -->
    <div class="user-profile" style="background: url({{ asset('images/background/user-info.jpg') }}) no-repeat;">
        <!-- User profile image -->
        <div class="profile-img"><img src="/images/users/profile.png" alt="user"/></div>
        <!-- User profile text-->
        <div class="profile-text"><a href="javascript:void(0)" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                     role="button" aria-haspopup="true"
                                     aria-expanded="true"> AAA </a>
            <div class="dropdown-menu animated flipInY"><a href="javascript:void(0)" class="dropdown-item"><i
                            class="ti-user"></i> My Profile</a> <a href="javascript:void(0)" class="dropdown-item"><i
                            class="ti-wallet"></i> My Balance</a> <a href="javascript:void(0)" class="dropdown-item"><i
                            class="ti-email"></i> Inbox</a>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('/') }}"
                   class="dropdown-item">
                    <i class="fa fa-power-off"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
    <!-- End User profile text-->
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-gauge"></i>
                    <span class="hide-menu">@lang('view/Side.man')</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="#">@lang('view/Side.regt')</a>
                    </li>
                    <li>
                        <a href="#">@lang('view/Side.dmna')</a>
                    </li>
                    <li>
                        <a href="#">@lang('view/Side.regv')</a>
                    </li>
                    <li>
                        <a href="#">@lang('view/Side.regs')</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-laptop-windows"></i>
                    <span class="hide-menu">@lang('view/Side.para')</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="#">@lang('view/Side.tnam')</a>
                    </li>
                    <li>
                        <a href="#">@lang('view/Side.catab')</a>
                    </li>
                    <li>
                        <a href="#">@lang('view/Side.pay')</a>
                    </li>

                    <li>
                        <a href="#">@lang('view/Side.tin')</a>
                    </li>


                    <li>
                        <a href="#">@lang('view/Side.gin')</a>
                    </li>


                    <li>
                        <a href="#">@lang('view/Side.tca')</a>
                    </li>

                    <li>
                        <a href="#">@lang('view/Side.cli')</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-bullseye"></i>
                    <span class="hide-menu">Analyse de l'impact</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>AIPD</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Aipd
                            Perimetre</a>
                    </li>
                    <li>
                        <a href="#">Aipd Perimetre Categorie</a>
                    </li>
                    <li>
                        <a href="#">Aipd Perimetre Sous Categorie</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>Aipd
                            Champs</a>
                    </li>

                </ul>
            </li>
            <li class="nav-devider"></li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
<!-- Bottom points-->
<div class="sidebar-footer">
    <!-- item--><a href="javascript:void(0)" class="link" data-toggle="tooltip" title="Settings"><i
                class="ti-settings"></i></a>
    <!-- item--><a href="javascript:void(0)" class="link" data-toggle="tooltip" title="Email"><i
                class="mdi mdi-gmail"></i></a>
    <!-- item--><a href="{{ url('/') }}"
                   class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
</div>
<!-- End Bottom points-->