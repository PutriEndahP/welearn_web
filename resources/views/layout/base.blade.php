<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Monitor Tinggi Air</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('codebase/src/assets/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('codebase/src/assets/media/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{asset('codebase/src/assets/css/codebase.min.css')}}">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill9/dist/polyfill.js"></script> --}}

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <style>
            .content-header{
                height: 85px;
            }
            #page-container.sidebar-inverse #sidebar .content-side-user{
                background-color: #343a40;
            }
            #page-header{
                background: linear-gradient(135deg,#6fb1e7 0,#f5d571 100%)!important;
            }
        </style>

        @yield('css_tambahan')

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
           
            @include('layout.sidebar')

            @include('layout.header')

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content" style="padding-top:50px">
                    @yield('content')
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <!-- <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div> -->
                    <div class="float-left">
                        <a class="font-w600" href="https://dinkominfo.surabaya.go.id/" target="_blank">Dinkominfo Surabaya</a> &copy; <span class="js-year-copy">{{\Carbon\Carbon::now()->format('Y')}}</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <div class="modal fade" id="modal-top2" tabindex="-1" role="dialog" aria-labelledby="modal-top2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
            <form method="POST" action="{{ url('/tambah_lokasi')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Tambah Lokasi</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <label class="col-12" for="name">Lokasi Pompa Air</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Lokasi .." required> 
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-12" for="name">Batas Normal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="batas_normal" name="batas_normal" placeholder="Batas normal.." required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="name">Batas Maksimal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="batas_maksimal" name="batas_maksimal" placeholder="Batas maksimal.." required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="name">Batas Waspada</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="batas_waspada" name="batas_waspada" placeholder="Batas waspada.." required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="name">BBM maksimal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="bbm" name="bbm" placeholder="Maksimal BBM .." required> 
                                </div>
                            </div>             
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-alt-success">
                            <i class="fa fa-check"></i> Submit
                        </button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="{{asset('codebase/src/assets/js/codebase.core.min.js')}}"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="{{asset('codebase/src/assets/js/codebase.app.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('codebase/src/assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('codebase/src/assets/js/pages/be_pages_dashboard.min.js')}}"></script>
        <script src="{{asset('js/date-format.min.js')}}"></script>
        @yield('js_tambahan')
    </body>
</html>