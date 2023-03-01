<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img{
            width: 100px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    @include('components.header')
    @auth
        @if (collect(request()->segments())->last() == Auth::user()->id)
           <p>Это ваша личная страница, {{ Auth::user()->nikname }}</p>
           <img src="{{ asset('storage/profile_pics/'.Auth::user()->path) }}" alt="">
        @else
            <p>Это страница, {{ App\Models\User::find(collect(request()->segments())->last())->nikname }}</p>
           <img src="{{ asset('storage/profile_pics/'.App\Models\User::find(collect(request()->segments())->last())->path) }}" alt="">
        @endif
        
       <a href="{{ route('logout')}}">Выйти</a>
    @endauth
    @guest
        <p>Это страница, {{ App\Models\User::find(collect(request()->segments())->last())->nikname }}</p>
        <img src="{{ asset('storage/profile_pics/'.App\Models\User::find(collect(request()->segments())->last())->path) }}" alt="">
    @endguest
</body>
</html>