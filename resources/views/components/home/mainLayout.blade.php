<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <link rel="icon" href="{{ asset('assets/img/logo-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/img/logo-192x192.png') }}" sizes="192x192" />

    <title>Thamoddya Rashmitha</title>


    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-dots dsn-ajax">

    @include('components.layout.preloader')

    <main id="main_root" class="main-root">
        @include('components.layout.header')

        @yield('content')

    </main>

    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->


    <!-- ==========  Social ========== -->
    <div class="social-side d-flex align-items-center flex-column justify-content-center">

        <ul class="socials d-flex flex-column-reverse">
            <li style="--dsn-index-animate : 0;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>Fb</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 1;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 2;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-twitter" aria-hidden="true"></i><span>Tw</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 3;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i><span>Linkedin</span>
                </a>
            </li>
        </ul>
        <div class="icon">FOLLOW US</div>
    </div>
    <!-- ========== End Social ========== -->

    <!-- ========== Style Option Page ========== -->
    <div id="dsn_box_options" class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)"
                    width="1" height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)"
                    width="2.6" height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)"
                    width="1" height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)"
                    width="2.6" height="1"></rect>
                <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>

        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewBox="0 0 48 48">
                <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>
    <!-- ========== End Style Option Page ========== -->
    <!-- ========== Line BG ========== -->

    <div id="line_head"><span class="container"></span></div>
    <!-- ========== End Line BG ========== -->

    <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dsn-grid.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
