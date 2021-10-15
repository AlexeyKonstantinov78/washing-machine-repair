<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {
    $phone = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $name = $_POST['phone'];
}

/* Сюда впишите свою эл. почту */
$myaddres  = "alekseykonstantinov@yandex.ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ получить консультацию!\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub = 'Заказ'; //сабж
$email = 'info.alekseykonstantinov.ru'; // от кого
$headers = 'From: info.alekseykonstantinov.ru' . "\r\n" .
    'Reply-To: info.alekseykonstantinov.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$send = mail($myaddres, $sub, $mes, $headers);

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=index.html">
    <title>Спасибо! Мы свяжемся с вами!</title>
    <meta name="generator">
    <script type="text/javascript">
        setTimeout('location.replace("/index.html")', 3000);
        /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
    </script>
</head>

<body>
    <h1>Спасибо! Мы свяжемся с вами!</h1>
</body>

</html>