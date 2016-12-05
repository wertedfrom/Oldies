<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" type="text/css" href={{url("css/normalize.css")}} media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href={{url("css/styles.css")}} media="screen" title="no title" charset="utf-8">
    <script src={{url("./js/faq.js")}} charset="utf-8"></script>

{{--<style>--}}
{{--</style>--}}

<!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
{{--<div class="staticbg"></div>--}}
<div class="container-fluid">
    @include('header')
    @yield('content')
    {{--@include('footer')--}}
    @include('footer')
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
