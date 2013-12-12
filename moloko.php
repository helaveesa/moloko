<?php
require("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <title>Сайт мотоциклисток</title>
    <link href="style.css" rel="stylesheet" />
    <script src="/js/js.jsp" language="javascript" type="text/javascript"></script>
</head>

<body>
	<div align="center">
		<table cellpadding="0" cellspacing="0" border="0" width="945">
		<tr>
        	<td colspan="2" align="left" valign="top" style="height:92px;">
            <a href="#"><img src="img/logo.jpg" border="0"></a></td>
        </tr>
		<tr>
            <td style="height:352px;" colspan="2" align="center" valign="top">
            <object style="width:945px; height:352px"  width="945" height="352" border="0"><a href="#"><img src="img/banner.jpg"></a></object></td>
		</tr>
        <div class="menu">
		<tr>
            <td style="width:272px; margin-top:0px; padding-top:0px;" align="left" valign="top">
            <a href="/pages/main.php"><img src="img/menu-1.jpg" border="0" name="T1"></a><br>
            <a href="/pages/about.php"><img src="img/menu-2.jpg" border="0" name="T2"></a><br>
            <a href="/pages/products.php"><img src="img/menu-3.jpg" border="0" name="T3"></a><br>
            <a href="/pages/price.php"><img src="img/menu-4.jpg" border="0" name="T4"></a><br>
            <a href="/pages/comments.php"><img src="img/menu-5.jpg" border="0" name="T5"></a><br>
            <a href="/pages/contacts.php"><img src="img/menu-6.jpg" border="0" name="T6"></a><br>
            <img src="img/menu-7.png" border="0"></td>
        </div>
			<td width="673" align="left" valign="top">
			<table border="0" width="100%" cellspacing="10" cellpadding="10">
		<tr>
            <td align="left" valign="top" width="217">
            <a href="/pages/allpages.php"><img src="img/push.jpg" border="0"></a><br>
            <a href="/pages/moto.php"><img src="img/next.jpg" border="0"><br>
            <a href="/pages/girls.php"><img src="img/motogirl.jpg" border="0"></a></td>
            
            <td align="left" valign="top">            
            <?php
		if($_SESSION[id])
		{
			echo "Приветствуем! <a href='?quit=ok'>выход</a>";	
		} else
		{
			?>
			<form method="post">
				E-Mail: <input type="text" name="email"><br>
				Пароль: <input type="password" name="pwd"><br>
				<input type="submit" name="ok_auth" value="Вход"><br>
				<a href="reg.php">Регистрация</a>
				<?php echo $error_auth; ?>
			</form>
			<?php
		}
		?>

                <h1>Мотоцикл и девушка: совместимо?</h1>
                <div>На сегодняшний день</div>
                <div>&nbsp;</div>
                <div>Наше предприятие</div>
                <div>&nbsp;</div>
                <div>В 2000 году были <a href="#">газ</a></div></td>
		</tr>
	</table>
  </td>
 </tr>

	<tr>
        <td width="272" align="left" valign="top" height="81">
        <a href="/pages/remzona.php">
        <img src="img/kik.jpg" border="0"></a></td>
        <td width="673" align="left" valign="top" height="81">
  <table border="0" width="100%" cellspacing="10" cellpadding="10">
	<tr>
        <td align="left" valign="top"><font color="#818181">© 2013 Helaveesa_Nolder | Motosite for girl<br>
        <a href="/info">Все права защищены</a></font></td>
        <td align="left" valign="top" width="160"><font color="#818181">Разработка сайта<br>
        <a href="#" target=_blank>helaveesa.nolder@gmail.com</a></font></td>
	</tr>
 </table>
 </td>
 </tr>
</table>
</div>
</body>
</html>