<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<a href="{{ route('mainpage') }}">Главная</a>

    <form action="{{ route('registration') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="email" placeholder="Ваш e-mail" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="nikname" placeholder="Ваш ник" value="{{ old('nikname') }}">
        @error('nikname')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="surname" placeholder="Ваша фамилия" value="{{ old('surname') }}">
        @error('surname')
            <p>{{ $message }}</p>
        @enderror
        <input type="file" name="pfp">
        @error('pfp')
            <p>{{ $message }}</p>
        @enderror
        <input type="date" name="birthdate" value="{{ old('birthdate') }}">
        <input type="password" name="password" placeholder="Пароль">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <input type="password" name="password_check" placeholder="Повторите пароль">
        @error('password_check')
            <p>{{ $message }}</p>
        @enderror
        <button type='submit'>Зарегистрироваться</button>
    </form>
    <p>или <a href="{{ route('login') }}">Войти</a> в свой аккаунт</p>
</body>
</html>