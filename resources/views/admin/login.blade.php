<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>
<body>

    <form method="post" action="{{route('admin-login-auth.blog')}}">

    @csrf
        <hr>
        <h4>Login:</h4>
            @error('email_login')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <input type="text" name="email_login" value="ytorp@example.net">
        <br>
        <h4>Password:</h4>
            @error('password_login')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <input type="password" name="password_login" value="ascvbg">
        <br><br>
        <button type="submit" name="button_login" value="Отправить">Отправить</button>
        <hr>
    </form>

</body>
</html>