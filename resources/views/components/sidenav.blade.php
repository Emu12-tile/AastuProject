    <!-- Vertical Nav -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <nav class="hk-nav hk-nav-light">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                    data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ion ion-ios-keypad"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>


                        {{-- <ul id="dash_drp" class="nav flex-column collapse collapse-level-1"> --}}
                        {{-- <li class="nav-item">
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="">CRM</a>
                                    </li>

                                </ul>
                            </li> --}}
                        {{-- </ul> --}}
                    </li>



                    <hr class="nav-separator">
                    <div class="nav-header">
                        <span>utils</span>
                        <span>GS</span>
                    </div>
                    {{-- <ul class="navbar-nav flex-column"> --}}
                    @role('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hr.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የተወዳዳሪዎች 1ኛ ምርጫ
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('educationlevel.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የትምህርት ደረጃ
                                </span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">

                            <a class="nav-link" href="{{ route('educationlevel.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                   የትምህርት ዓይነት
                                </span>
                            </a>
                        </li> --}}
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('educationtype.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የትምህርት ዓይነት
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('level.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    ደረጃ
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('position.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሚወዳደሩበት የስራ መደብ
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('jobcategory.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የስራ ክፍል
                                </span>
                            </a>
                        </li>

















                        {{-- <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text"> Admin Page</span>
                            </a>


                            <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('educationlevel.index') }}">የትምህርት ደረጃ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('level.index') }}">ደረጃ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('educationtype.index') }}">የትምህርት ዓይነት</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('position.index') }}">የሚወዳደሩበት የስራ መደብ </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('jobcategory.index') }}">የስራ ክፍል</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- </ul> --}}
                        {{-- <li class="nav-item">

                                <a class="nav-link" href="{{ route('admin.index') }}">
                                    <i class="ion ion-ios-list-box"></i>
                                    <span class="nav-link-text">
                                        Admin Page
                                    </span>
                                </a>
                            </li> --}}
                    @endrole
                    @role('hr')
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('list.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የአመልካቾች ዝርዝር
                                </span>
                            </a>
                        </li>


                        <li class="nav-item active">

                            {{-- <span class="nav-link-text"> ምርጫ 1</span> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hr.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የተወዳዳሪዎች 1ኛ ምርጫ
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('resource.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሰው ሀብት ውጤት
                                </span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('lowresource.lowresource') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    ውጤት (ከ ቡድን መሪ
                                    በታች)
                                </span>
                            </a>
                        </li>


                        </li>






                        {{-- <li class="nav-item active">

                            <span class="nav-link-text"> ምርጫ 2</span>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('secondchoice.secondchoice') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የተወዳዳሪዎች 2ኛ ምርጫ
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('secondhr.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሰው ሀብት ውጤት
                                </span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('secondchoice.lowresource') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    ውጤት (ከ ቡድን መሪ
                                    በታች)
                                </span>
                            </a>
                        </li>

                        </li> --}}





                        {{-- <li class="nav-item">

                            <a class="nav-link" href="{{ route('resource.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሰው ሀብት ውጤት
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('lowresource.lowresource') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    ውጤት (ከ ቡድን መሪ በታች)
                                </span>
                            </a>
                        </li> --}}
                    @endrole
                    @role('president')
                        <li class="nav-item active">

                            {{-- <span class="nav-link-text"> ምርጫ 1</span> --}}

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('resource.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሰው ሀብት ውጤት
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('presidential.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    አጠቃላይ ውጤት
                                </span>
                            </a>
                        </li>


                        </li>
                        {{-- <li class="nav-item active">

                            <span class="nav-link-text"> ምርጫ 2</span>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('secondhr.index') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    የሰው ሀብት ውጤት
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('presidential.choice2evaluation') }}">
                                <i class="ion ion-ios-list-box"></i>
                                <span class="nav-link-text">
                                    አጠቃላይ ውጤት
                                </span>
                            </a>
                        </li>


                        </li> --}}
                    @endrole










            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head">
                    <img class="brand-img d-inline-block align-top" src="{{ asset('assets/dist/img/logo-light.png') }}"
                        alt="brand" />
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span
                            class="feather-icon"><i data-feather="x"></i></span></a>
                </div>
                <hr>
                <h6 class="mb-5">Layout</h6>
                <p class="font-14">Choose your preferred layout</p>
                <div class="layout-img-wrap">
                    <div class="row">
                        <a href="javascript:void(0);" class="col-6 mb-30 active">
                            <img class="rounded opacity-70" src="{{ asset('assets/dist/img/layout1.png') }}"
                                alt="layout">
                            <i class="zmdi zmdi-check"></i>
                        </a>

                    </div>
                </div>
                <hr>
                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select"
                        class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select"
                        class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select"
                        class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select"
                        class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i
                                class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
        <img class="d-none" src="{{ asset('assets/dist/img/logo-light.png') }}" alt="brand" />
        <img class="d-none" src="{{ asset('assets/dist/img/logo-dark.png') }}" alt="brand" />
    </div>
    <!-- /Setting Panel -->