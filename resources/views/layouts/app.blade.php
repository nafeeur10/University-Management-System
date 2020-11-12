<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'ERU-EDU') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('css/rtl-support.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">

    @yield('styles')
</head>

<body>
    <div id="app">
        @yield("content")
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>


    <script type="text/javascript">
        //console.log("Before Working!");

        setInterval(function(){
            $.ajax({
                url: "/visitors/info",
                method: 'GET',
                success: function(res) {
                    //console.log("Hitting......", res);
                },
                error: function(err) {
                    //console.log("Not Hitting", err);
                }
            })
        }, 10000)
    </script>
    @yield('scripts')
</body>

</html>
