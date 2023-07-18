<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello World
    </h1>
    @foreach ($informations as $info)
    <div>
        {{$info['name']}}
    </div>
    <div>
        {{$info['surname']}}
    </div>
    <div>
        {{$info['age']}}
    </div>

</body>
</html>