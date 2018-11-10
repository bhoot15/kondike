<!DOCTYPE html>
<html lang="en">
@include('admin._head')
<body>
@if(Request::is('admin'))

@else
    @include('admin._nav')
@endif

<div class="top10">
    @yield('content')
</div>

@include('admin._js')
</body>
</html>