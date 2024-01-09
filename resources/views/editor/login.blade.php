<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Editor's Login </h1>

    <form action="{{route('editorLogin')}}" method="POST">
        @csrf
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        <button type="submit"> Submit </button>
    </form>
</body>
</html>