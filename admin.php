<html> 
<head><title>list out</title><meta charset="GBK"></head> 
<body> 

ȷ��֪ͨ: <br>
<form action="list.php" method="post"> 
���������Ա����: <input type="password" name="pswd" value = ""><br><br>
<?php 
header("charset=GBK");
if(is_array($_GET)&&count($_GET)>0)
{ 
if(isset($_GET["number"]))
{ 
  echo "֪ͨ����: "  . $_GET["number"] ;
  echo "<input type=\"hidden\" name = \"nn\" value = \"" . $_GET["number"] . "\">";
} 
else
{
  echo "֪ͨ����: <input type=\"text\" name=\"nn\" value =" . $_GET["number"] . ">";
}
} 
else
{
  echo "֪ͨ����: <input type=\"text\" name=\"nn\" value = \"\" >";
}
?><br><br>
<input type="submit" value="��ѯ"> 
</form> 


���֪ͨ: <br>
<form action="add.php" method="post"> 
���������Ա����: <input type="password" name="pswd" value = ""><br><br>
֪ͨ����: <input type="text" name="number" value = ""><br><br>
<input type="submit" value="���"> 
</form> 

</body> 
</html> 