<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar-Docx</title>
    <style>
        label{
            display: block;
            margin-bottom: 5px;
        }
        input{
            width: 580px
        }
        body{
            padding-left: 10px
        }
    </style>
</head>
<body>
    <form action="{{ route('descargarword') }}" method="post">
        <br>
        <label for="imagenword">Imagen Word:</label>
        <input type="text" name="imagenword" id="imagenword" value="http://itsolutionstuff.com/frontTheme/images/logo.png">
        <br>
        <br>
        <label for="textoword">Texto Word:</label>
        <textarea name="textoword" id="textoword" cols="80" rows="10">
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
