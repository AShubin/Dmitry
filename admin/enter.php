<?php
var_dump($_POST);

session_start();
$admin='admin';
$pass='a029d0df84eb5549c641e04a9ef389e5';

if(isset($_SESSION['admin']) ){
    header("Location: admin.php");
    exit;
}
?>

<p><a href="index.php">Главная</a> | <a href="contact.php">Контакты</a> | <a href="admin.php">Админка</a></p>
<hr>
Страница авторизации.
<br>
<form method="post">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" name="submit" value="Войти">
</form>

<?php
if( isset($_POST['submit']) ) {
if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
$_SESSION['admin'] = $admin;
header("Location: admin.php");
exit;
}
else echo "<p>Логин или пароль неверны!</p>";
}
?>