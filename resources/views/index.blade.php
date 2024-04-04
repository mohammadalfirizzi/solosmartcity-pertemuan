<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <title>@yield('title')</title>

    @include('include.style')

  </head>

  <body>
    <!-- ***** Header Area Start ***** -->
    @include('include.navbar')
    <!-- ***** Header Area End ***** -->

    @yield('content')
    <!-- end slider -->
    @include('include.footer')

    @include('include.script')
  </body>
</html>
