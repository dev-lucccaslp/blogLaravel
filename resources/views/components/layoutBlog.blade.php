<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/blog.css">

    <title>{{$title ?? 'Blog access'}}</title>
</head>
<body>
    <div class="container">
        <header class="menu">
            <div class="menu-logo">
                <img src="./assets/images/bb.jpg" alt="" srcset="">
                <p class="menu-name"> Olá {{$nameUser ?? 'user'}} </p>
            </div>

            <div class="menu-buttons">
                <a href="" class="button">Nova postagem</a>
                <a href="/logout" class="button">Sair</a>
            </div>
        </header>
        {{$slot}}
    </div>
</body>
</html>
