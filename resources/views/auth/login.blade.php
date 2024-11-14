<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">Электронная почта</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" required>
        @if ($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div>
        <button type="submit">Войти</button>
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>