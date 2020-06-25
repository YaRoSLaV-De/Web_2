<?php
  echo "<p>"."Дата і час: ".date('d.m.Y H.i')."</p>";
  echo "<p>"."IP адрес пристрою: ".$_SERVER['REMOTE_ADDR']."</p>";

  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
  elseif (strpos($user_agent, "OPR") !== false) $browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
  elseif (strpos($user_agent, "Trident") !== false) $browser = "Internet Explorer 10";
  elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  else $browser = "Невідомий";
  echo "<p>"."Ваш браузер: $browser"."</p>";
  echo "<p>"."Yaroslav © 2020р."."</p>";
?>
