<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        /* div {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
        } */
    </style>
</head>
<body>
    <div class="flex justify-center mt-20">        
        @yield('content')
    </div>
</body>
</html>