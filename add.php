<?php
header("charset=GBK");
$pswd = $_POST["pswd"];
$number = $_POST["number"];
if($pswd != "bnumathmodel")
{
  echo " ";
}
else
{
  $file = fopen("notice.txt", "a");
  fwrite($file, $number . "\r\n");
  fclose($file);
  echo "Ìí¼Ó³É¹¦ ";
}

?>