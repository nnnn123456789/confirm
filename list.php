<?php
header("charset=GBK");
$pswd = $_POST["pswd"];
$number = $_POST["nn"];
if($pswd != "bnumathmodel")
{
  echo "������� ";
}
else
{
  echo "�Ѿ�ȷ���յ���ͬѧ��: <br>";
  $file = fopen("guys.txt", "r");
  while(!feof($file))
  {
    $str = fgets($file);
    $s = substr($str,0,strlen($number));
    if($number == $s)
    {
      echo substr($str,strlen($number) ) . "<br>";
    }
  }
  fclose($file);
}

?>