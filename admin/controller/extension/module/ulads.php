<html>
<head>
  <title>�������� ������ �� ������</title>
</head>
<body>
 <h2>�������� ������ �� ������</h2>
 <form action="" method="post" enctype="multipart/form-data">
  �������� ����:<br>
  <input type="file" name="filename"><br> 
  <input type="submit" value="���������"><br>
 </form>
<?php
if($_FILES["filename"]["name"] != '')
{
 if($_FILES["filename"]["size"] > 1024*6*1024)
  {
  echo "<h3>������ ����� ��������� 6 ��������</h3>";
  exit;
  }
  // ��������� ���� �������� ���� �� ���������� ��� �� ��������� ���������� � ���������� ����� �������
 if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
  {
  move_uploaded_file($_FILES["filename"]["tmp_name"],$_FILES["filename"]["name"]);
  echo "<h3>���� <font color='red'>" .$_FILES["filename"]["name"] ."</font> ��������</h3>";
  } else
  {
  echo "<h3>������ �������� �����</h3>";
  }
}
?>
</body>
</html>