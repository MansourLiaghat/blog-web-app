<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="background-color: #95c5fb ; direction: rtl">
    <h1>خوش آمدید {{$user->name}} عزیز</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid,
        assumenda cumque doloremque explicabo facere harum hic in perferendis quaerat
        quod repudiandae rerum, voluptas voluptatem voluptatum? Autem fuga ipsa repudiandae.</p>
    <p>{{$user->name}}نام کاربری شما :</p>
    <p>رمز عبور شما :{{$password}}</p>
{{session()->get('error')}}
</div>
</body>
</html>
