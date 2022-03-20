<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Buddha Jyoti')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            max-width: 100vw;
            overflow-x: hidden;
        }
        body {
            font-family: Roboto, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            color: #222629;
            letter-spacing: .02em;
            line-height: 20px;
        }

        .ex-large-900 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            font-size: 50px !important;
            line-height: 50px !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .ex-large-800 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 45px !important;
            line-height: 45px !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .large-700 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 25px !important;
            line-height: 30px !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .title-top {
            font-family: 'Montserrat', sans-serif;
            font-size: 35px !important;
            line-height: 40px !important;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: rgba(33, 37, 41, 0.85);
        }

        .bg-base-color {
            background-color: #cd2541;
            border-radius: 2px;

            border: none;
        }

        .separator-line {
            width: 30%;
            height: 7px;
            margin-top: 5px;
            margin-right: 0;
            margin-left: 0;
            opacity: 0.85;
        }

        .text-center {
            text-align: center !important;
        }

        @media screen and (max-width: 768px){
            .title-top{
                margin-left: 15px !important;
            }
            .separator-line{
                margin-left: 15px !important;
            }
        }

    </style>
    @yield('style')
</head>
<body>
@yield('content')
</body>
@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/lax.js" ></script>
<script>
    window.onload = function() {
        lax.setup() // init

        const updateLax = () => {
            lax.update(window.scrollY)
            window.requestAnimationFrame(updateLax)
        }

        window.requestAnimationFrame(updateLax)

        lax.setup({
            breakpoints: { small: 0, large: 992 }
        })
    }

</script>
</html>
