<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- User profile -->
    <div class="user-profile" style="background: url({{ asset('assets/images/background/user-info.jpg') }}) no-repeat;">
        <!-- User profile image -->
        <div class="profile-img"><img src="/assets/images/users/profile.png" alt="user"/></div>
        <!-- User profile text-->
        <div class="profile-text"><a href="javascript:void(0)" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                     role="button" aria-haspopup="true"
                                     aria-expanded="true">{{\App\Client::find(session('client'))->CLI_NAME}}</a>
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
            @role('admin|operateur|dpo')
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-gauge"></i>
                    <span class="hide-menu">@lang('view/Side.man')</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('LISTE-REGISTRE_DCP') }}">@lang('view/Side.regt')</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-REGISTRE_DEMANDEACCE') }}">@lang('view/Side.dmna')</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-REGISTRE_VIOLDCP') }}">@lang('view/Side.regv')</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-REGISTRE_SOUSTRAITANT') }}">@lang('view/Side.regs')</a>
                    </li>
                </ul>
            </li>
            @endrole
            @role('admin')
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-laptop-windows"></i>
                    <span class="hide-menu">@lang('view/Side.para')</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('LISTE-TABLES_NAME') }}">@lang('view/Side.tnam')</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-CATEGORIE_TABLE') }}">@lang('view/Side.catab')</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-PAYE') }}">@lang('view/Side.pay')</a>
                    </li>

                    <li>
                        <a href="{{ route('LISTE-TYPE_INCIDENT') }}">@lang('view/Side.tin')</a>
                    </li>


                    <li>
                        <a href="{{ route('LISTE-GRAVETE_INCIDENT') }}">@lang('view/Side.gin')</a>
                    </li>


                    <li>
                        <a href="{{ route('LISTE-TYPE_CALCULE') }}">@lang('view/Side.tca')</a>
                    </li>

                    <li>
                        <a href="{{ route('LISTE-CLIENT') }}">@lang('view/Side.cli')</a>
                    </li>


                    <li>
                        <a href="{{ route('LISTE-USER') }}">@lang('view/Side.uti')</a>
                    </li>
                </ul>
            </li>
            @endrole
            @role('admin')
            <li>
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="mdi mdi-bullseye"></i>
                    <span class="hide-menu">Analyse de l'impact</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li>
                        <a href="{{ route('LISTE-AIPD') }}"><i class="fa fa-circle-o"></i>AIPD</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-AIPD_PERIMETRE') }}"><i class="fa fa-circle-o"></i>Aipd
                            Perimetre</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-AIPD_PERIMETRE_CATEGORIE') }}">Aipd Perimetre Categorie</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-AIPD_PERIMETRE_SOUSCATEGORIE') }}">Aipd Perimetre Sous Categorie</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-AIPD_CHAMP') }}"><i class="fa fa-circle-o"></i>Aipd
                            Champs</a>
                    </li>
                    <li>
                        <a href="{{ route('LISTE-AIPD_PERIMETRESCHAMP') }}">Aipd perimetres champs</a>
                    </li>

                </ul>
            </li>
            @endrole
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