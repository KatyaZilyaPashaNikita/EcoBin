<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <h1>Добро пожаловать на главную страницу</h1>
    @if ($isLoggedIn)
        <p>Вы вошли в систему!</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    @else
        <p>Вы не вошли в систему.</p>
        <a href="{{ route('login') }}">Войти</a>
        <a href="{{ route('register') }}">Регистрация</a>
    @endif
</body>
</html>