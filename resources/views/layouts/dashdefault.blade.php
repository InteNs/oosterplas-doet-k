<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/dashboard.css" rel="stylesheet" type="text/css">


</head>
<body>
@include('dashheader')

@if(!Auth::guest())
    @include('dashmenu')
@endif

@yield('content')
</body>
</html>