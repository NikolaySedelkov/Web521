<form action="{{ route('api.auth.register') }}">
    <table>
        <caption>Регистрация</caption>
        <tbody>
            <tr>
                <td>Имя</td>
                <td><input name="name" required/></td>
            </tr>

            <tr>
                <td>Почта</td>
                <td><input name="email" type="email" required/></td>
            </tr>

            <tr>
                <td>Пароль</td>
                <td><input name="password" type="password" required/></td>
            </tr>
        </tbody>
    </table>
    <button>Зарегистрироваться</button>
</form>