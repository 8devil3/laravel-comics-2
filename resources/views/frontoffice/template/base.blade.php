<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

   <!-- Font -->
   <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@200;400;700&display=swap" rel="stylesheet">

   <!-- Style -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <title>@yield('title')</title>
</head>



<body>
   @include('frontoffice._partials.header')

   @yield('mainContent')

   @include('frontoffice._partials.footer')
</body>
</html>
