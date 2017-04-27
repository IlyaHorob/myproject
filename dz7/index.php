<?php
date_default_timezone_set('Europe/Kiev');
ini_set("display_errors", "1");
error_reporting(E_ALL);
include_once 'functions.php';
$userBirthday = 0;
if (!empty($_GET)) {
    $username = strip_tags(trim($_GET['username']));
    $phone = $_GET['phone'];
    $birthday = strip_tags(trim($_GET['birthday']));
    if (empty($username)) {
        echo 'Enter username value';
        echo '<br>';
    } else {
        setcookie('username', $username, time() + 3600);
    }
    if (empty($phone)) {
        echo 'Enter phone value';
        echo '<br>';
    } else {
        my_setcookie('phone', $phone, time() + 3600);
    }
    
    if (!empty($birthday)) {
        $birthday = strtotime($birthday);
        $month = date('m', $birthday);
        $day = date('d', $birthday);
        
        $userBirthdayTs = mktime(0, 0, 0, $month, $day);
        $today = time();
        $userBirthday = $today - $userBirthdayTs;
        if ($userBirthday < 0) {
            $userBirthday *= -1;
        }
        $userBirthday = floor(($userBirthday / 3600) / 24);
    }
}
setcookie('age', mt_rand(10, 70), (time() + 3600) * 3);

/**
 * 1. Сделайте две страницы: index.php и hello.php и свяжите их ссылками друг на
 * друга. При заходе на index.php с помощью формы
 * <form action ="" method =" GET ">
 * <input type =" text " name =" username ">
 * <input type =" submit ">
 * </form> спросите у пользователя его имя и запишите в куки. При заходе на hello.php
 * поприветствуйте пользователя фразой “Hello, %Name%!”.
 */

/**
 * Спросите у пользователя телефон с помощью формы. Затем сделайте так,
 * чтобы в другой форме на другой странице (поля: имя, фамилия, телефон)
 * при ее открытии поле телефон было автоматически заполнено.
 * <form action ="" method =" GET ">
 * <input type =" text " name =" phone ">
 * <input type =" submit ">
 * </form>
 */
/**
 * 3. Установите куку с именем age . Запишите туда случайное число от 10 до 70 (с
 * помощью mt_rand). Сделайте так, чтобы эта кука установилась на 3 часа.
 */

/**
 * Спросите дату рождения пользователя. При следующем заходе на сайт
 * напишите сколько дней осталось до его дня рождения. Если сегодня день
 * рождения пользователя — поздравьте его!
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <a href="hello.php">Go to Hello</a>
</p>
<p>
    Till your birthday <?php echo $userBirthday ?> is left.
</p>
<div>
    <form action="index.php" method="GET">
        <div>
            <label> User name:
                <input type="text" name="username">
            </label>
        </div>
        <div>
            <label> Phone
                <input type="text" maxlength="5" name="phone">
            </label>
        </div>
        <div>
            <label> Birthday
                <input type="text" name="birthday">
            </label>
        </div>
        <input type="submit" value="Send">
    </form>
</div>
</body>
</html>


