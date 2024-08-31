<!DOCTYPE html>
<html lang="en">

<head>

    <!--/meta-->

    @include('layout_login_home.styles')
</head>
<!--/head-->

<body>
    {{-- Header --}}
    @include('layout_login_home.header')
    <!--/header-->


    <!--/form-->
    <main>
        @yield('content')
    </main>


    {{-- scripts--}}
    @include('layout_login_home.script')
</body>

</html>