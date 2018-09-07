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
      echo "你已经确认过了<br>";
    }
    else
    {
      $file = fopen("guys.txt", "a");
      fwrite($file, $str);
      fwrite($file, "\r\n");
      echo "确认成功<br>";
      fclose($file);
    }
  }
  else
  {
    echo "你不需要确认这条消息<br>";
  }
  
  
?>
