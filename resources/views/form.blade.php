<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("upload") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="file">
        <button type="submit" type="Submit">Submit</button>
    </form>
    <br>
    <hr/> 
    <form action="{{ route("download","imagenes/3AAY2BXDStlkVS9bmZbq16kk2kKeiSyxe9Kf4cfl.png") }}" method="POST">
        @csrf
       <input type="submit" value="Descargar"/>
    </form>
</body>
</html>