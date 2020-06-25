<!DOCTYPE html>
<html lang="uk">
<head>
   <link rel="stylesheet" href="assets/css/style.css">
<!--<style type="text/css" media="all">
    @import url("assets/css/style.css");
</style>-->

    <meta charset="utf-8">
    <title>Мій сайт</title>
</head>
<body>
<header>
  <div сclass="container">
    <?php include ("menu.php");?>
  </div>
</header>

<!--кнопки-->
<form name="test" action="check.php" merhod="post">
<input type="submit" name="iwning" value="Ніч"/>
<input type="submit" value="День" />
</form>
<?php /***
echo <<<HTML
<style>
if (isset($_POST["iwning"])){
	 body{ background:url("../img/test.jpg") no-repeat center center fixed ;}
   else  body{ background:url("../img/test1.jpg") no-repeat center center fixed ;}
</style>
  }
HTML;
***/?>
<div сclass="container">

</div>
<div class="divtxt">
    <p>Демчук Ярослав</p>
</div>
<div сclass="container">
  <?php include ("browser.php");?>
</div>
<div>
  <img src="assets/img/5.jpg" alt="Картинка" class="data">
</div>
</body>
<footer>
  <div сclass="container">
    <hr>
    <?php include ("footer.php");?>
  </div>
</footer>
</html>
