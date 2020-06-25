<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-lg-4">
                @include('inc.sidebar')

            </div>
        </div>
    </div>
</body>
</html>
