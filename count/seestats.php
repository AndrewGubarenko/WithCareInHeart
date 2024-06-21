<?php
if (isset($_GET['col'])) { $col=$_GET['col']; } else { $col=50; }
$file=file("stat.log"); ?>

<html>
<head>
<style type='text/css'>
 td.zz {PADDING-LEFT: 3px; FONT-SIZE: 9pt; PADDING-TOP: 2px; FONT-FAMILY: Arial; }
</style>
</head>

<body>
<center>
<?php
if ($col>sizeof($file)) { $col=sizeof($file); }
echo "Відвідування <b>".$col."</b> відвідувань сайту:"; ?>

<table width="680" cellspacing="1" cellpadding="1" border="0"
    STYLE="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="zz" width="100"><b>Час та дата</b></td>
 <td class="zz" width="200"><b>Дані про відвідувача</b></td>
 <td class="zz" width="100"><b>IP/проксі</b></td>
 <td class="zz" width="280"><b>Відвіданий URL</b></td>
</tr>


<?php
   for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
   $string=explode("|",$file[$si]);
   $q1[$si]=$string['0']; // дата и время
   $q2[$si]=$string['1']; // имя бота
   $q3[$si]=$string['2']; // ip бота
   $q4[$si]=$string['3']; // адрес посещения
echo '<tr bgcolor="#eeeeee"><td class="zz">'.$q1[$si].'</td>';
echo '<td class="zz">'.$q2[$si].'</td>';
echo '<td class="zz">'.$q3[$si].'</td>';
echo '<td class="zz">'.$q4[$si].'</td></tr>';
}
echo '</table>';
echo '<br>Подивитись відвідування <a href=?col=100>100</a> <a href=?col=500>500</a>';
echo '<a href=?col=1000>1000</a> відвідувань.';
echo '<br>Подивитись <a href=?col='.sizeof($file).'>всі відвідування</a>.</center>';
echo '</body></html>';
?>