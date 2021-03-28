<!-- Sidebar -->
<!--
    Helper classes

    Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
    Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
        If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

    Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
    Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
        - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
-->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                <a class="link-effect font-w700" href="{{ url('home')}}">
                        <span class="font-size-xl text-dual-primary-dark">Monitoring</span>
                    </a>
                    <a class="link-effect font-w700" href="index.html">
                        <span class="font-size-xl text-primary">Ketinggian Air</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{asset('img/pemkot_sby.png')}}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="{{asset('img/pemkot_sby.png')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html" style="color : #3f9ce8!important;">Dinkominfo</a>
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html" style="color : #e8c43f!important;"> Surabaya</a>
                    </li><br>
                    {{-- <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Admin</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                            <i class="si si-logout"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                {{-- <li>
                <a href="{{url('home')}}"><i class="si si-home"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li> --}}
                <li>
                    <a href="{{ url('monitoring')}}"><i class="fa fa-bar-chart-o"></i>Monitoring</a>
                    {{-- <ul>
                        <li>
                            <a href="be_blocks.html">Styles</a>
                        </li>
                        <li>
                            <a href="be_blocks_tiles.html">Tiles</a>
                        </li>
                        <li>
                            <a href="be_blocks_draggable.html">Draggable</a>
                        </li>
                        <li>
                            <a href="be_blocks_api.html">API</a>
                        </li>
                    </ul> --}}
                </li>

                @if (auth()->user()->hak_akses == 'Admin')
                <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-top2"><i class="fa fa-map-marker"></i><span>Tambah Lokasi</span></a>
                    {{-- <ul>
                        <li>
                            <a href="be_blocks_widgets_users.html">Users</a>
                        </li>
                        <li>
                            <a href="be_blocks_widgets_stats.html">Statistics</a>
                        </li>
                    </ul> --}}
                </li>
                @endif

                <li>
                    <a href="{{url('lokasi')}}"><i class="fa fa-database"></i><span class="sidebar-mini-hide">Data Rumah Pompa</span></a>
                </li>

                @if (auth()->user()->hak_akses == 'Admin') 
                <li>
                    <a href="{{ url('kirim_notifikasi')}}"><i class="fa fa-bell-o"></i><span class="sidebar-mini-hide">Kirim Notifikasi</span></a>
                    
                </li>
                @endif
                
                @if (auth()->user()->hak_akses == 'Admin')
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Pengaturan</span></a>
                    <ul>
                        <li>
                            <a href="{{ url('daftar_user')}}">User</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->