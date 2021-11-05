<?php


// LAB PRACTICALS SHEET 01 - QUESTION 04

$borrowed_amount = 20000000;
$anum_interest = 17;
$years = 5;

$monthly_installment = (($borrowed_amount * ($anum_interest/100) * $years)+($borrowed_amount)) / ($years * 12);

echo "<table border='1'>";
echo "<tr><td>Borrowed amount</td><td>".number_format($borrowed_amount,2)."</td></tr>";
echo "<tr><td>Anum Interest Rate</td><td>".$anum_interest."%</td></tr>";
echo "<tr><td>Years</td><td>".$years."</td></tr>";
echo "<tr><td>Monthly Installment</td><td>".number_format($monthly_installment,2)."</td></tr>";
echo "</table>";

?>

<br><br>
<table border='1'>
    <tr><td>Borrowed amount</td><td><?php echo number_format($borrowed_amount,2) ?></td></tr>
    <tr><td>Anum Interest Rate</td><td><?php echo $anum_interest ?> %</td></tr>
    <tr><td>Years</td><td><?php echo $years ?></td></tr>
    <tr><td>Monthly Installment</td><td><?php echo number_format($monthly_installment,2) ?></td></tr>
</table>