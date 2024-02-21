<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/info">Información</a>
    <hr>
    <h1>Contacto</h1>

    @include('parciales.form-error')

    <form action="{{ route('comentario.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="correo">Correo</label>
        <input type="text" name="correo" value="{{ old('correo') }}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" cols="30" rows="5">{{ old('comentario') }}</textarea>
        <br>
        <label for="ciudad">Ciudad</label><br>
        <select name="ciudad">
            <option value="GDL" @selected(old('ciudad') == 'GDL')>Guadalajara</option>
            <option value="Zapopan" @selected(old('ciudad') == 'Zapopan')>Zapopan</option>
            <option value="Tonalá" @selected(old('ciudad') == 'Tonalá')>Tonalá</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>