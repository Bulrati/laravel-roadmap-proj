<!DOCTYPE html>

<html lang="en">

<head>

    @include('layout.partials.head')

</head>

<body class="mb-5 pb-4">


@include('layout.partials.nav')

@include('layout.partials.header')

@include('flash-message.flash-message')

@yield('content')

@include('layout.partials.footer')

@include('layout.partials.footer-scripts')

</body>

</html>