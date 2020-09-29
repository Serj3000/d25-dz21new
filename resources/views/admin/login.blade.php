<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>
<body>
<h2>Форма</h2>
<h4>{{$_SERVER['SCRIPT_FILENAME']}}</h4>
<h4>{{$_SERVER['SCRIPT_NAME']}}</h4>
<h4>{{$_SERVER['SERVER_ADDR']}}</h4>
<h4>{{$_SERVER['REMOTE_ADDR']}}</h4>
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
        <input type="password" name="password_login" value="password"> 
        {{-- ascvbg --}}
        <br><br>
        <button type="submit" name="button_login" value="Отправить">Отправить</button>
        <button type="submit" name="button_cencel" value="Cencel">Отменить</button>
        <button type="submit" name="button_logout" value="Logout">Logout</button>
        <hr>
    </form>
    <h3>Результат отправки формы (URI: {{$_SERVER['REQUEST_URI']}} | IP: {{$_SERVER['REMOTE_ADDR']}}):</h3>
        @if(isset($usered))
            <h4>1) $usered</h4>
                {{$usered}}
            <br>
            <h4>2) Auth::user()</h4>
                {{$usered =Auth::user()}}
        @endif
    <hr>
</body>
</html>