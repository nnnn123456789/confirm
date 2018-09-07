<html> 
<head><title>list out</title><meta charset="GBK"></head> 
<body> 

确认通知: <br>
<form action="list.php" method="post"> 
请输入管理员密码: <input type="password" name="pswd" value = ""><br><br>
<?php 
header("charset=GBK");
if(is_array($_GET)&&count($_GET)>0)
{ 
if(isset($_GET["number"]))
{ 
  echo "通知代号: "  . $_GET["number"] ;
  echo "<input type=\"hidden\" name = \"nn\" value = \"" . $_GET["number"] . "\">";
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
<input type="submit" value="查询"> 
</form> 


添加通知: <br>
<form action="add.php" method="post"> 
请输入管理员密码: <input type="password" name="pswd" value = ""><br><br>
通知代号: <input type="text" name="number" value = ""><br><br>
<input type="submit" value="添加"> 
</form> 

</body> 
</html> 