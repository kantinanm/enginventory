<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title> @yield('title')</title>

    @yield('css_script')

</head>
<body>
@include('includes.front-end.header')

<main><!-- start main -->
    <section class="container">
         @yield('content')
    </section>
</main><!-- end main -->
<!-- Footer - start -->
@include('includes.front-end.footer')
<!-- Footer - end -->
@yield('footer')
@yield('js_plugin')
</body>
</html>