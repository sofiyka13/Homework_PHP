<html>
<head>
<title> Спортивная школа Триумф </title>
<meta charset="utf-8">
</head>
<body>
<body bgcolor = "#fafdd3">
<p><img src='12.png' alt='Иллюстрация' align="right"><b><u><font color='#119a25' face='Monotype Corsiva' size='120'>Спортивная школа олимпийского резерва "Триумф"</u></font></b></p>
<a href = "index.php"><h4>Главная</h4></a>
<a href = "objects.php"><h4>Спортивные объекты</h4></a>
<a href = "enterprise.php"><h4>Руководство</h4></a>
<a href = "contacts.php"><h4>Контакты</h4></a>
<p><center><font color='080e3e' face='Comic Sans MS'><h1> Тренерский состав:</h1></p></font></center>

<?php
$my_host='localhost';
$my_user='root';
$my_password='sportschool2020';
$my_db='sportschool';

$link = mysqli_connect($my_host, $my_user, $my_password, $my_db) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM coach";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table border='1'  bordercolor='#0000FF' align='center'><tr><th bgcolor='#F1F1F1'>№</th><th bgcolor='#F1F1F1'>ФИО</th><th bgcolor='#F1F1F1'>Вид спорта</th><th bgcolor='#F1F1F1'>Стаж работы</th><th bgcolor='#F1F1F1'>Образование</th><th bgcolor='#F1F1F1'>Категория</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td bgcolor='#FFFFFF'>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
<p><center><font color='f63023' face='Comic Sans MS'><h2> Наши тренера обладают всеми необходимыми знаниями и навыками. Они сделают всё, чтобы тренировочный процесс был максимально комфортным и безопасным для каждого!</font></h2></p></center>
</body>
</html>