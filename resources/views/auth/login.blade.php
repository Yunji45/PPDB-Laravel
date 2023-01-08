<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('login/style.css')}}">
</head>
<body>
    <section class="login">
        <div class="titulo">Staff Login</div>
        <form action="#" method="post" enctype="application/x-www-form-urlencoded">
            <input type="text" required title="Username required" placeholder="Username" data-icon="U">
            <input type="password" required title="Password required" placeholder="Password" data-icon="x">
            <div class="olvido">
                <div class="col"><a href="#" title="Ver Carásteres">Register</a></div>
                <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>
            </div>
            <a href="#" class="enviar">Submit</a>
        </form>
    </section>
</body>
</html>