<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title', 'Product Locator')
        </title>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>

    <body id="home">

        <section class="container">
            <div id="content" class="row">
                @yield('content')
            </div>

            <div class="footer-copyright">
                <div class="text-center container-fluid padding_separator">
                    © 2017 :: <a href="http://a5.shalhavit.com"> Assignment 5</a>
                </div>
            </div> <!-- Copyright-->

        </section>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </body>
</html>
