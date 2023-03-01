<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
<a href="{{ route('mainpage') }}">Главная</a>

    <form action="{{ route('userLogin') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Введите адрес вашей почты">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <input type="password" name="password" placeholder="Ваш пароль">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        @error('formError')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Log In</button>
    </form>
    <p>Ещё не с нами? Вы можете<a href="{{ route('register') }}"> Зарегистроваться</a>!</p>
</body>
</html>