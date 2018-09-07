<html>
<head>
<meta charset="GBK">
<title></title>
</head>
<body>
 
<form action="update.php" method="post">
学生姓名: <input type="text" name="sn"><br><br>
<?php 
header("charset=GBK");
if(is_array($_GET)&&count($_GET)>0)
{ 
if(isset($_GET["number"]))
{ 
  echo "通知代号: "  . $_GET["number"] ;
  echo "<input type = \"hidden\" name = \"nn\" value = \"" . $_GET["number"] . "\">";
} 
else
{
  echo "通知代号: <input type=\"text\" name=\"nn\" value =" . $_GET["number"] . ">";
}
} 
else
{
  echo "通知代号: <input type=\"text\" name=\"nn\" value = \"\" >";
}
?><br><br>
<input type="submit" value="确认">
</form>
 
</body>
</html>