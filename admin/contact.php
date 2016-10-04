<p><a href="index.php">Главная</a> | <a href="contact.php">Контакты</a> | <a href="admin.php">Админка</a></p>
<hr>
Страница авторизации.

<?php
require_once "auth.php";
echo md5('mypass');
?>