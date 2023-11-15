<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sachin Tendulkar Web Site</title>
</head>
<body>
    <div class="container">
        @include('layout.header')
        @yield('appContents')
        @include('layout.footer')
    </div>
</body>
</html>
