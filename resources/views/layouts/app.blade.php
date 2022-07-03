<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD livewire</title>
    
    @livewireStyles
</head>
<body>
    <a href="{{url('/')}}" style="margin: 20px">Inicio </a>
    <a href="{{url('ingresar-tipos')}}" style="margin: 20px">Ingresar</a>

    @yield('content')

    @livewireScripts
</body>
</html>