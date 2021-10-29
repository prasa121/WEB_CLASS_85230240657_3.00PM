<?php

// LAB PRACTICALS SHEET 01 - QUESTION 01

$transport_income = 420000.32;
$fuel_charge = 75000; 

$income_after_fuel_charge = $transport_income - $fuel_charge;
$driver_salary = $income_after_fuel_charge * (15/100);
$supporter_salary = $income_after_fuel_charge * (10/100);
$net_profit_before_tax = $income_after_fuel_charge - ($driver_salary + $supporter_salary);
$income_tax = $transport_income * (10/100);
$net_profit_after_tax = $net_profit_before_tax - $income_tax;


?>


<table border='1'>
<tr> <th>Description</th>  <th>Amount</th> </tr>
<tr> <th style='text-align: left'>Transport Income</th> <td style='text-align: right'><?php echo number_format($transport_income,2); ?></td> </tr>
<tr> <th style='text-align: left'>Fuel Charge</th>  <td style='text-align: right'><?php echo number_format($fuel_charge,2); ?></td> </tr>
<tr> <th style='text-align: left'>Driver Salary</th>  <td style='text-align: right'><?php echo number_format($driver_salary,2); ?></td> </tr>
<tr> <th style='text-align: left'>Supporter Salary</th>  <td style='text-align: right'><?php echo number_format($supporter_salary,2); ?></td> </tr>
<tr> <th style='text-align: left'>Net Profit before TAX</th>  <td style='text-align: right'><?php echo number_format($net_profit_before_tax,2); ?></td> </tr>
<tr> <th style='text-align: left'>Income Tax</th>  <td style='text-align: right'><?php echo number_format($income_tax,2); ?></td> </tr>
<tr> <th style='text-align: left'>Net Profit after TAX</th>  <td style='text-align: right'><?php echo number_format($net_profit_after_tax,2); ?></td> </tr>  
</table>
