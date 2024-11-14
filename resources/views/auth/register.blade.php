<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Имя</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>
    <div>
        <label for="email">Электронная почта</label>
        <input id="email" type="email" name="email" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Подтвердите пароль</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">Зарегистрироваться</button>
    </div>
</form>