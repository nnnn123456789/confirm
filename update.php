<?php
header("charset=GBK");
  function inthefile($str, $filename)
  {
    $file = fopen($filename, "r");
    while(!feof($file))
    {
      $s = substr(fgets($file),0,strlen($str));
      if($str == $s)
      {
        fclose($file);
        return true;
      }
    }
    fclose($file);
    return false;
  }
  
  $studentid = $_POST["sn"];
  $noticeid = $_POST["nn"];
  $str = $noticeid  . "\t" . $studentid;
  if(inthefile($studentid, "student.txt") and inthefile($noticeid, "notice.txt"))
  {
    if(inthefile($str, "guys.txt"))
    {
      echo "���Ѿ�ȷ�Ϲ���<br>";
    }
    else
    {
      $file = fopen("guys.txt", "a");
      fwrite($file, $str);
      fwrite($file, "\r\n");
      echo "ȷ�ϳɹ�<br>";
      fclose($file);
    }
  }
  else
  {
    echo "�㲻��Ҫȷ��������Ϣ<br>";
  }
  
  
?>
