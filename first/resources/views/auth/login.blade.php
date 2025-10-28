<form action="{{ route('api.auth.login') }}">
    <table>
        <caption>Авторизация</caption>
        <tbody>
            <tr>
                <td>Почта</td>
                <td><input name="email" type="email" required/></td>
            </tr>

            <tr>
                <td>Пароль</td>
                <td><input name="password" type="password" required/></td>
            </tr>

            <tr>
                <td colspan="2">
                    <a href="{{ route('auth.register') }}"> Зарегистрировать </a>
                </td>
            </tr>
        </tbody>
    </table>
    <button>Авторизироваться</button>
</form>