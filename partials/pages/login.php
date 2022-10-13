<?php
// проверяем был ли отправлен POST запрос
if (isset($_POST["submit"])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE `username` = '$login' AND `password` = '$password'";

    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

    setcookie("user", $user['id'], time() + 3600 * 24, "/"); // установить куки для юзера и время сохранения
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