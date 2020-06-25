<!DOCTYPE html>
<html lang="uk">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <title>Моя сторінка</title>
</head>
<body class="main">
  <?php/***

  $style= <<< CSS

  body{
      font-size: 200%;
  }

  CSS;
  echo  Html::style($style, []);

HTML;
***/?>

<header>

<?php include ("menu.php");?>
</header>

<div>
    <?php include ("rand.php");?>
    <p> Демчук Ярослав Валерійович </p>
</div>

<div class="tablediv">
    <p>Контакти: valsorya.ambrela@gmail.com</p>
</div>

<div align="center" style="color:#ffff00" >
    <?php
    srand((float) microtime() * 10000);
    $about = array(
    "(Интернет был сделан так хорошо, что многие думают о нём как о натуральном ресурсе вроде Тихого океана, а не как о чём-то, что сделано человеком. Когда в последний раз технология такого масштаба работала без ошибок? В сравнении с этим веб — это шутка. Веб делали любители) – Алан Кей, ученый, создатель объектно-ориентированного программирования.",
    "Я вірю, що інженери врятують світ!!!",
    "Програмування — це розбиття чогось великого і неможливого на щось маленьке і цілком реальне."
  );
    shuffle($about);
    $rand = array_rand($about, 3);
    echo $about[$rand[0]] . "\n";
    ?>
</div>

<div>
  <hr>
  <?php include ("footer.php");?>
</div>

</body>
</html>
