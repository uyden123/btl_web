<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Coffee shop</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    @yield('stylesheet')

</head>

<body>

<!-- body_wrap - start -->
<div>

    @include('components.header')

    <!--body-main-section-->
    <main>
        @include('components.breadcrumb')

        @yield('content')
    </main>
    <!--body-main-section-->

</div>
<!-- body_wrap - end -->

@include('components.footer')


</body>

</html>
