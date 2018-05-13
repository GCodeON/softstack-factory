<!DOCTYPE html>
<html>
<head lang="en-US">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '');
    </script>

    @include('partials.metas')
    <script src="https://use.fontawesome.com/b9c1035ab3.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico?v=4') }}"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Montserrat" rel="stylesheet">
    @stack('stylesheets')
    @yield('css')
    <script type="text/javascript">
        var CMS_PREFIX = 'test';
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push    = n;
            n.loaded  = !0;
            n.version = '2.0';
            n.queue   = [];
            t         = b.createElement(e);
            t.async   = !0;
            t.src     = v;
            s         = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body class="{{$page['slug'] or 'generic'}} {{$bodyClass or ''}} brand-bg">

@include('partials.facebook', ['facebookId' => env('FACEBOOK_APP_ID')])

<div id="myApp">
    @yield('main')
</div>

<script type="text/javascript" src="{{ mix('js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script>
    $(document).foundation();
</script>
@stack('scripts')
@yield('javascript')

</body>
</html>
