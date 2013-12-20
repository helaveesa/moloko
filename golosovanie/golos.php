<?php
if(isset($_COOKIE[golos]))
{
	// вывод
	$f1=fopen("golos.txt","r"); // открываем файл для чтения
	$str=fread($f1,filesize("golos.txt")); // читаем его в $str
	fclose($f1); // закрываем файл
	$mas=explode(":",$str); // разбиваем строку в массив
	$max=0; // максимум=0
	foreach($mas as $per)
	{
		if($per>$max) $max=$per;	// если элемент массива больше, чем текущий максимум, мы его присваиваем максимуму
	}
	foreach($mas as $per) // цикл создания массива ширин в процентном отношении к максимуму
	{
		$wdt[]=$per*100/$max;	
	}
	echo "<table width='400'>
	  <tr>
		<td>Отлично:</td>
		<td width=100%><div style='width:$wdt[0]%; background:red;'>&nbsp;</div></td>
		<td>$mas[0]</td>
	  </tr>
	  <tr>
		<td>Хорошо:</td>
		<td><div style='width:$wdt[1]%; background:yellow;'>&nbsp;</div></td>
		<td>$mas[1]</td>
	  </tr>
	  <tr>
		<td>Нормально:</td>
		<td><div style='width:$wdt[2]%; background:green;'>&nbsp;</div></td>
		<td>$mas[2]</td>
	  </tr>
	  <tr>
		<td>Плохо:</td>
		<td><div style='width:$wdt[3]%; background:blue;'>&nbsp;</div></td>
		<td>$mas[3]</td>
	  </tr>
	  <tr>
		<td>Ужасно:</td>
		<td><div style='width:$wdt[4]%; background:cyan;'>&nbsp;</div></td>
		<td>$mas[4]</td>
	  </tr>
	</table>
	";
} else
{
	if(isset($_GET[ok])) // если была нажата кнопка...
	{
		// -------------------ДОБАВЛЕНИЕ-----------------------
		$f1=fopen("golos.txt","r"); // открываем файл для чтения
		$str=fread($f1,filesize("golos.txt")); // читаем его в $str
		fclose($f1); // закрываем файл
		$mas=explode(":",$str); // разбиваем строку в массив
		$golos=$_GET[golos]; // получаем значение из формы
		$mas[$golos]++; // и увеличиваем на 1 соответствующее значение массива
		$str=implode(":",$mas); // собираем массив обратно в строку
		$f1=fopen("golos.txt","w"); // открываем файл для перезаписи. При этом все стирается...
		fwrite($f1,$str); // и записываем в чистый файл новое значение счетчика
		fclose($f1); // закрываем файл
		setcookie("golos","ok");
		header("location:golos.php"); // очистка массива $_GET
		/*echo "<script>location.replace('golos.php')</script>"; второй способ редиректа для очистки массива*/
	} else
	{
		?>
		<form>
Оцените фото<br />
<input type="radio" name="golos" value="0" checked /> Отличное<br />
<input type="radio" name="golos" value="1" /> Хорошее<br />
<input type="radio" name="golos" value="2" /> Нормальное<br />
<input type="radio" name="golos" value="3" /> Плохое<br />
<input type="radio" name="golos" value="4" /> Ужасное<br />
<input type="submit" name="ok" value="Оценить" />
</form>
		<?php
	}
}
?>