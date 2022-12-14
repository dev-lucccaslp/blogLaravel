<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/global.css">

    <title>{{$title ?? 'Blog'}}</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>{{$titleName}}</h1>
            {{$slot}}

            {{$btn ?? null}}
        </div>
    </div>
</body>
</html>
