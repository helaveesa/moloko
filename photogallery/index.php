<?php
//-------------�������� ����-------------------------
if(isset($_POST[ok]))
{
	if($_FILES[photo]['size']<=2*1024*1024) // ���� ������ ����� ����������
	{
		if(stripos($_FILES[photo][type],"image")!==false) // ��������� ��� �������� �����
		{
			$d=opendir("photos"); // ��������� ����� photos
			$max=0; // ������ ��������� �������� ���������
			while($file=readdir($d)) // ������ �����
			{
				list($n,$b)=explode(".",$file); // ��������� ������ ����� ������
				if($n>$max) $max=$n;	// � ���������� �� � ����������. ���� ��� ����� �������� ������ �������� ��������� - ������������ �������� ���������
			}
			closedir($d); // ��������� �����
			$name=$max+1; // ����������� �������� �� 1 - ��� � ����� ������� ��� �����
			list($x,$ext)=explode("/",$_FILES[photo][type]); // �������� ���������� �� MIME-���� �����
			if($ext=="pjpeg") $ext="jpeg"; 
			move_uploaded_file($_FILES[photo][tmp_name],"photos/$name.$ext"); // � ��������� ���������� ���� �� ������ � ����� photos
			header("location:index.php");
		} else $error="������������ ������ �����!";
	} else $error="�������� ������ �����!";
}
// -----------------�������� ����-----------------------
if(isset($_GET[del]))
{
	unlink("photos/$_GET[del]");
	header("location:index.php");	
}
?>
<!doctype html>
<html>
<head>
<meta charset="windows-1251">
<title>�����������</title>
</head>

<body>
<center>
<?php
//---------------����� ����������-----------------------
$d=opendir("photos"); // ��������� ����� photos
while($file=readdir($d)) // ������ ��
{
	list($name,$ext)=explode(".",$file);
	if($ext=="jpg" or $ext=="gif" or $ext=="png" or $ext=="jpeg")
	{
		$photos[]=$file;	// ������ ������ ����� ������������ � ������ $photos
	}
}
closedir($d); // ��������� �����
$kol_on_page=4; // ������ ���������� ���� �� ��������
$vsego=count($photos); // ��������� ������� ����� ����
$kol_pages=ceil($vsego/$kol_on_page); // �������� ���������� �������
if(isset($_GET[page])) $page=$_GET[page]; else $page=1; // �������� ����� ��������
$ot=($page-1)*$kol_on_page; // ������ ����� ���������
$do=$page*$kol_on_page-1; // ������ ����� ���������
echo "<table>";
for($i=0;$i<count($photos);$i++) // ��������� ���� ������� �� ����� ������� ���� ����������
{
	if($i<$ot or $i>$do) continue; // ���� ���� �� ������ � �������� - ���������� ���� ��� ������
	if($i%2==0) echo "<tr>"; // ���� ����� ���� - ������ ������� ������ ������
	echo "<td align=center><img src='photos/$photos[$i]' width='200'><br />
<a href='?del=$photos[$i]'>�������</a></td>";
	if($i%2==1) echo "</tr>"; // ���� ����� ���� - �������� ��������� ������
}
echo "</table>";
if($kol_pages>1) // ���� ���-�� ������� ������ �����
{
	for($i=1; $i<=$kol_pages;$i++) // ���� ������ ������ �� ��������
	{
		if($i==$page) echo "<b>$i</b> "; // ���� ����� �������� ����� ������� - ������� ��� ��� ������ ���������� �����������
		else echo "<a href='?page=$i'>$i</a> ";	 // ������ �������� ������� GET �������� �� ����� page, ������� �������� - ����� ��������
	}
}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" name="ok" value="���������"><br>
<font color="#FF0000"><?php echo $error; ?></font>
</form>
</center>
</body>
</html>