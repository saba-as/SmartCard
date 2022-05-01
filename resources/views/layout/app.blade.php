<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <title>@yield('pageTitle')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    @yield('content')


    <script src="{{ asset('js/jquery-3.6.0.min.js')}}" language="JavaScript" type="text/javascript" ></script> 
    <script src="{{ asset('js/html2canvas.min.js')}}" language="JavaScript" type="text/javascript" ></script>
    <script src="{{ asset('js/html2canvas.js')}}" language="JavaScript" type="text/javascript" ></script> 
    <script src="{{ asset('js/cardExport.js')}}" language="JavaScript" type="text/javascript" ></script> 

</body>

</html>
