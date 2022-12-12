<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Alslam Alikm peace be upon you {{ $name }}</h1> --}}
    <h1>Alslam Alikm peace be upon you </h1>
    <a href={{ route('blog.index') }}>go to index</a>
    <a href={{ route('blog.show',['id'=>2,'name'=>'Mohamed']) }}>go to show</a>
</body>
</html>