<?php

session_start();
header("Content-Type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';



if (!isset($_REQUEST["index"]))
{
  echo '<Gather input="dtmf" numDigits="4" timeout="5" executionTimeout="6" digitEndTimeout="2" action="' . $_SERVER['PHP_SELF'] . '?index=2"><Play>http://' . $_SERVER['SERVER_ADDR'] . '/lenny/Lenny1.wav</Play></Gather>';
}
else
{
  $next = $_REQUEST["index"] +1;
  echo '<Gather input="dtmf" numDigits="4" timeout="6" executionTimeout="6" digitEndTimeout="2" action="' . $_SERVER['PHP_SELF'] . '?index=' . $next .'"><Play>http://' . $_SERVER['SERVER_ADDR'] . '/lenny/Lenny' . $_REQUEST["index"] . '.wav</Play></Gather>';
}

?>