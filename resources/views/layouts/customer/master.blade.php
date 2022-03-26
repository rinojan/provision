<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('layouts.customer._meta')
    @include('layouts.customer._style')
</head>
<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
 
    <div class="mobile-sticky-body-overlay"></div>
    <div class="wrapper">
        @include('layouts.customer._sidebar')

    <div class="page-wrapper">
        @include('layouts.customer._header')

    
    <div class="content-wrapper">
    <div class="content">
        @yield('header')
        @yield('content')
    </div>
	</div>


        @include('layouts.customer._footer')
        </div>
        </div>
        @include('layouts.customer._script')
        @yield('js')
        
</body>

</html>