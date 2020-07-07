@include('layouts.kodeatas')
@include('layouts.topbar')
@include('layouts.sidebar')
<div id="layoutSidenav_content">
<main>
<br>
<div class="container-fluid">
@yield('content')

@include('layouts.kodebawah')