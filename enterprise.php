﻿<html>
<head>
<title> Спортивная школа Триумф </title>
<meta charset="utf-8">
</head>
<body>
<body bgcolor = "#fafdd3">
<p><img src='12.png' alt='Иллюстрация' align="right"><b><u><font color='#119a25' face='Monotype Corsiva' size='120'>Спортивная школа олимпийского резерва "Триумф"</u></font></b></p>
<a href = "index.php"><h4>Главная</h4></a>
<a href = "trainers.php"><h4>Тренерский состав</h4></a>
<a href = "objects.php"><h4>Спортивные объекты</h4></a>
<a href = "contacts.php"><h4>Контакты</h4></a>
<p><font color='080e3e' face='Comic Sans MS'><h1> Руководство: </h1></p></font>

<?php
$my_host='localhost';
$my_user='root';
$my_password='sportschool2020';
$my_db='sportschool';

$link = mysqli_connect($my_host, $my_user, $my_password, $my_db) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM enterprise";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table border='1'  bordercolor='#0000FF' align='center'><tr><th bgcolor='#F1F1F1'>№</th><th bgcolor='#F1F1F1'>Руководство</th><th bgcolor='#F1F1F1'>Телефон</th><th bgcolor='#F1F1F1'>E-mail</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td bgcolor='#FFFFFF'>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
<p><center><font color='#000000' face='Comic Sans MS'><h5>В случае, если вам необходима констультация с одним из руководителей СШОР "Триумф" или страшим тренером отделения, вы можете записаться на приём по телефону +7 (484) 2591975 (Администрация).</font></center></h5></p>
</body>
</html>