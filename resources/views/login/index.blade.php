<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @include('components.navbar');
    <h1>login</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> 
    @endif
    <form method="POST" action="/login" name='login'>
        @csrf
        <label for="correo">Correo</label>
        <input type="correo" name="correo" id="correo" required autofocus value='{{ old('correo') }}' placeholder="correo" >
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="password">
        <label for="recuerdame">recuerdame</label>
        <input type="checkbox" name="recuerdame" id="recuerdame">
        <button type="submit">ingresar</button>
    </form>
</body>
</html>