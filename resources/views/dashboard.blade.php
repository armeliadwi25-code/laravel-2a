<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{$judul}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- membuat container -->
<div class="container">
    <!-- header -->
    <div class="header">
        <h1 class="judul">Welcome To My Web</h1>
    </div>
    <div class="banner"></div>
    <!-- header -->

    <div class="isi">
        <!-- sidebar -->
        <div class="sidebar">
            <ul class="nav">
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </div>
        <!-- sidebar -->

        <!-- content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- content -->
    </div>
</div>

</body>
</html>