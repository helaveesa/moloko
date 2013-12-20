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
        	<td colspan="2" align="left" valign="top" style="height:92px;"><a href="/index.php?id=1"><img src="img/logomoloko.jpg" border="0"></a></td>
        </tr>
		<tr>
            <td style="height:352px;" colspan="2" align="center" valign="top">
            <img src="img/banner2.jpg" width="961" height="359" border="0"></td>
		</tr>
		<tr>
            <td style="width:272px; margin-top:0px; padding-top:0px;" align="left" valign="top">
            <a href="/index.php?id=1"
            onMouseOut="ImageSwap('T1','img/menu-1.jpg')"
            onMouseOver="ImageSwap('T1','img/menu-1_.jpg')"
            onMouseDown="ImageSwap('T1','img/menu-1_.jpg'')"><img src="img/menu-1.jpg" name="T1" width="288" height="36" border="0"></a><br>
            <a href="/index2.php?id=2"
            onMouseOut="ImageSwap('T2','img/menu-2.jpg')"
            onMouseOver="ImageSwap('T2','img/menu-2_.jpg')"
            onMouseDown="ImageSwap('T2','img/menu-2_.jpg'')"><img src="img/menu-2.jpg" name="T2" width="288" height="36" border="0"></a><br>
            <a href="/index3.php?id=8"
            onMouseOut="ImageSwap('T3','img/menu-3.jpg')"
            onMouseOver="ImageSwap('T3','img/menu-3_.jpg')"
            onMouseDown="ImageSwap('T3','img/menu-3_.jpg'')"><img src="img/menu-3.jpg" name="T3" width="288" height="36" border="0"></a><br>
            <a href="/index4.php?id=15"
            onMouseOut="ImageSwap('T4','img/menu-4.jpg')"
            onMouseOver="ImageSwap('T4','img/menu-4_.jpg')"
            onMouseDown="ImageSwap('T4','img/menu-4_.jpg'')"><img src="img/menu-4.jpg" name="T4" width="288" height="36" border="0"></a><br>
            <a href="/forma.php"
            onMouseOut="ImageSwap('T5','img/menu-5.jpg')"
            onMouseOver="ImageSwap('T5','img/menu-5_.jpg')"
            onMouseDown="ImageSwap('T5','img/menu-5_.jpg'')"><img src="img/menu-5.jpg" name="T5" width="288" height="36" border="0"></a><br>
            <a href="/index4.php?id=17"
            onMouseOut="ImageSwap('T6','img/menu-6.jpg')"
            onMouseOver="ImageSwap('T6','img/menu-6_.jpg')"
            onMouseDown="ImageSwap('T6','img/menu-6_.jpg'')"><img src="img/menu-6.jpg" name="T6" width="288" height="36" border="0"></a><br>
            <a href="/index4.php?id=17"
            onMouseOut="ImageSwap('T6','img/menu-61.jpg')"
            onMouseOver="ImageSwap('T6','img/menu-61_.jpg')"
            onMouseDown="ImageSwap('T6','img/menu-61_.jpg'')"><img src="img/menu-61.jpg" name="T6" width="288" height="36" border="0"></a><br>
            <img src="img/menu-7.jpg" width="288" height="36" border="0"></td>
			<td width="673" align="left" valign="top">
			<table border="0" width="100%" cellspacing="10" cellpadding="10">
		<tr>
            <td align="left" valign="top" width="217">
            <a href="/index3.php?id=8">
            <img src="img/push.jpg" width="239" border="0"></a><br>
            <img src="img/next.jpg" width="239" border="0"><br>
            <img src="img/next2.jpg" width="239" border="0"><br>
            <img src="img/next3.jpg" width="239" border="0"><br>
            <a href="/golosovanie/golos.php">
            <img src="img/ocenka.jpg" width="239" border="0"></a></td>
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
			<a href="reg.php"><img src="img/reg.jpg" alt="Регистрация" width="239" border="0"></a><br>
				<?php echo $error_auth; ?>
			</form>
			<?php
		}
		?>

                <h1><a href="about.php"><img src="img/about.jpg" alt="Актуальное" width="382" height="123" border="0"></a></h1>
                <div>На сегодняшний день девушки перестали быть &quot;украшением&quot; мотоцикла, перестали мыть &quot;стального коня&quot; на публике...</div>
                <div>&nbsp;</div>
                <div>Девушки получили категорию А и сели за руль боевого друга и товарища. Надо сказать, они управляются с ним не хуже мужчин...</div>
                <div>&nbsp;</div>
                <div>В экспоцентре &laquo;Гарден Сити&raquo;<a href="/index2.php?id=2"></a> ежегодно проводятся мотовыставки: мотосалон IMIS. Тех, кто интересуется мотоциклами всех моделей и назначений, порадуют обширной программой: от пресс-конференции 30 байкерских клубов страны и выставки новых тюнингованных мотоциклов до фристайл соревнований и стантрайдинга на мотоциклах спортивных. Посмотреть на это красочное и неординарное зрелище будет интересно даже тем, у кого нет собственного железного коня.</div></td>
		</tr>
		<tr>
		  <td align="left" valign="top">&nbsp;</td>
		  <td align="left" valign="top">&nbsp;</td>
		  </tr>
	        </table>
  </td>
 </tr>

	<tr>
        <td width="272" align="left" valign="top" height="81">
        <a href="/index.php?id=1">
<img src="img/reklama.jpg" width="289" height="87" border="0"></a></td>
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