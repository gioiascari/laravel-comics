<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Dc Comics</title>
</head>
<body>
    <!-- Header -->
    @include('partials.header')

    @include('partials.jumbotron')
   <!-- / Header -->
    <!-- Main -->

    @yield ('main')
    <!-- / Main -->

    <!-- Footer -->
    @include ('partials.footer')
    <!-- /Footer -->
    <script src="/js/carousel.js"></script>
</body>
</html>
