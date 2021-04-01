<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title> Document</title>
    </head>
    <body>
        <h1> My Name is {{$name}}</h1>
        <form action="send" method="POST">
            @csrf
            Name
            <input type="text" name="myname" id="myname">
            <input type="submit" value="send">
    </body>
</html>
