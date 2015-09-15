<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Devon McClure
            @show
        </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        @section('head')
        <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        @show
    </head>

    <body>