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

    <form action="/contacto-guarda" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo">
        <br>
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" cols="30" rows="5"></textarea>
        <br>
        <label for="ciudad">Ciudad</label><br>
        <select name="ciudad">
            <option value="GDL">Guadalajara</option>
            <option value="Zapopan">Zapopan</option>
            <option value="Tonalá">Tonalá</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>