<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .jumbotron {
            padding: 3rem 0;
            background: #fff;
        }
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
        }
    </style>

    <title>GoQuiz</title>

</head>
<body>

    @include('pages.inc.nav')

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>