<?php

// LAB PRACTICALS SHEET 01 - QUESTION 02

$fahrenheit = 325;
$centigrade = ($fahrenheit - 32) * (5/9);


?>


<table border='1'>
<tr> <th>Fahrenheit</th>  <th>Centigrade</th> </tr>
<tr> <th><?php echo $fahrenheit; ?></th> <th><?php echo number_format($centigrade,2); ?></th> </tr>
</table>
