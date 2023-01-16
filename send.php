
<?php

echo '
<style>
body {
  background: #000;
}
</style>
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

$servername = "asicfox.mysql.tools";
$username = "asicfox_birthday";
$password = "~ys8tD5U*3";
$dbname = "asicfox_birthday";


$name = $_POST['name'];
$phone = $_POST['phone'];
$nick = $_POST['nickname'];
$mail = $_POST['email'];
$model = $_POST['model'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO main_request (username, userphone, usernick, email, usermodel)
VALUES ('$name', '$phone', '$nick', '$mail', '$model')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>