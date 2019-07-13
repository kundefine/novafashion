<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>{{config('app.name')}} - @yield('title', 'Responsive Bootstrap Admin Template')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('backend/favicon.png')}}" type="image/png" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('backend/css/theme-default.css')}}"/>
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('backend/kassets/css/backend.css')}}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>