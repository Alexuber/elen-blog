<?php
    // Логіки для зберігання паролю:
    //     1) При реєстраціїї - шифруємо пароль.
    //     2) При логіні
    //         - пароль, який ввів користувач потрібно зашифрувати по тій же схемі, як при реєстрації
    //     3) Перевіряти пароль в базі із зашифрованим паролем корисувача


/*  1. Отримати пароль користувача.
    2. Отримати користувача по логіну.
    3. Перевірити чи паролі співпадають.
*/
// проверяем был ли отправлен POST запрос


if (isset($_POST["submit"])) {
    $login = $_POST['login']; // змінна логін - це дані з форми  поля "логін"
    $password = $_POST['password']; // змінна password - це дані з форми  поля "password"

    $sql = "SELECT * FROM users WHERE `username` = '$login'"; // знаходимо користувача в базі по введеному логіну з форми

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

    
    if(password_verify($password, $user['password'])) { // порівнюємо пароль введений із паролем з БД
        echo "Authorized succes";
        setcookie("user", $user['id'], time() + 3600 * 24, "/"); // установить куки для юзера и время сохранения
    } else {
        echo "User is not authorized";
    } 

    die();

}
?>

<form method="POST">
    <p>
        Login: <br />
        <input type="text" name="login">
    </p>
    <p>
        Password: <br />
        <input type="password" name="password">
    </p>
    <p>
        <input type="submit" name="submit" value="login">
    </p>
</form>