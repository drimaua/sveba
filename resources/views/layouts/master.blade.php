<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

@include('layouts.top')

@include('partials.navbar')

    @yield('content')

@include('layouts.footer')

</body>
</html>
