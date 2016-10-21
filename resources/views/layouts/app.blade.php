<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.fragments.head')
</head>
<body id="page-top" data-spy="scroll">

	<!-- navigation -->
    @include('layouts.fragments.nav')
    <!-- content -->
    @yield('content')
    <!-- footer -->
    @include('layouts.fragments.footer')
    <!-- scripts -->
    @include('layouts.fragments.scripts')
	@yield('script-add-on')
</body>
</html>
