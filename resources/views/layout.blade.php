<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>
<body>

@yield('content')
<ul>
    <li><a href="/open">взять книгу из шкафа</a></li>
    <li><a href="/close">положить книгу в шкаф</a></li>
    <li><a href="/read">прочитать книгу</a></li>
    <li><a href="/write">внести изменения</a></li>
</ul>



</body>
</html>
