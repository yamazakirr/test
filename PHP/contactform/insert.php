<?php
mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=lesson3;host=localhost;","root","root");
$pdo ->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
  </head>

  <body>
    <h1>お問合せフォーム</h1>
    <div class="center">
      <p>お問合せありがとうございました。
        <br>3営業日以内に担当者よりご連絡差し上げます。
      </p>
    </div>
  </body>
</html>
