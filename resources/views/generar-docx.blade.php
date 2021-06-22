<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar-Docx</title>
</head>
<body>
    <form action="{{ route('descargar') }}" method="post">
        <br>
        <label for="">Marca Agua Word</label>
        <input type="text" name="marcaaguaword" id="" value="http://itsolutionstuff.com/frontTheme/images/logo.png" style="width: 400px;">
        <br>
        <br>
        <label for="">Imagen Word</label>
        <input type="text" name="imagenword" id="" value="http://itsolutionstuff.com/frontTheme/images/logo.png" style="width: 400px;">
        <br>
        <br>
        <label for="">Texto Word</label>
        <textarea name="textoword" id="" cols="80" rows="10">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
<br>
<br>
        <button type="submit">Descargar Docx</button>
        @csrf
    </form>
</body>
</html>
