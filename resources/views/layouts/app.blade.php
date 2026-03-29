<!DOCTYPE html>

<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    @include('partials.head')
    @stack('styles')
</head>

<body class="counter-scroll">
    <canvas class="cursor-trail" id="trail" style="display: none;"></canvas>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="ic-wrap">
            <span class="icon icon-long-arrow-alt-up-solid"></span>
        </span>
    </button>
    <!-- /Scroll Top -->

    <!-- #wrapper -->
    <main id="wrapper">

        {{-- Header --}}
        @include('partials.header')

        {{-- Page Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('partials.footer')

    </main>
    <!-- /#wrapper -->

    {{-- Mobile Menu & Settings --}}
    @include('partials.mobile-menu')

    {{-- Scripts --}}
    @include('partials.scripts')

</body>

</html>
