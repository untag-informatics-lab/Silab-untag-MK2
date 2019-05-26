<html lang="en" dir="ltr">
<head>
    {{-- Meta --}}
        <title>@yield('title')</title>
        <meta charset="utf-8">        
    {{-- /Meta --}}

    <!-- global stylesheets -->
        {{--  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">  --}}
        <link href="{{ url('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    {{-- Core JS files --}}
        <script src="{{ url('assets/js/app.js') }}"></script>
        <script src="{{ url('assets/js/demo_pages/dashboard.js') }}"></script>
        @yield('corejs')
    {{-- /Core JS files --}}        
</head>
<body>
    @yield('content')
    </div>
</body>
</html>
