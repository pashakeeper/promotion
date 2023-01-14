<?php

echo '
<link rel="icon" href="https://asicfox.ua/wp-content/uploads/2022/08/favicon.svg" sizes="32x32" />
  <link rel="icon" href="https://asicfox.ua/wp-content/uploads/2022/08/favicon.svg" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://asicfox.ua/wp-content/uploads/2022/08/favicon.svg" />
<link rel="stylesheet" id="asicfox-landing-css" href="./style.css" />
<div class="overlay thanks"></div>
<div class="modal thanks">
    <div class="modal_content">
      <h3 class="modal_title">Дякуємо за участь!</h3>
      <p class="modal_desc">
        Будьте на звязку разом з нами та слідкуйте за новинами розіграшу
      </p>
      <p class="modal_desc">
       Дата проведення: 19.01.2023
      </p>
      <a href="https://t.me/asicfoxmine">Перейти до Telegram AsicFoxChannel</a>
      <div class="close">
        <img src="./img/icons/times.svg" alt="" width="31" height="31" />
      </div>
    </div>
  </div>
';



$to = 'asicfoxbtc@gmail.com';
$subject = 'Розіграш Гаманців';
$message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Имя: ' . $_POST['name'] . '</p>
                        <p>Номер телефона: ' . $_POST['phone'] . '</p>
                        <p>Телеграм: @' . $_POST['nickname'] . '</p>
                        <p>Почта: ' . $_POST['email'] . '</p>
                        <p>Какую модель покупали: ' . $_POST['model'] . '</p>
                    </body>
                </html>';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <prize@form.com>\r\n";
mail($to, $subject, $message, $headers);
?>