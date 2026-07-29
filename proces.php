<?php
echo " Employee Payroll System <br>"; 
echo "========================================= <br>";
$name = $_POST["name"];
$rate = (float)  $_POST["hr"];
$hoursWorked = $_POST["hw"];
$overtimeHours = $_POST["ho"];

$otrate = $rate * 1.5;

echo "Employee Name: $name <br>"; 
echo "Hourly Rate: $rate <br>"; 
echo "Overtime Rate: $otrate <br>" ;
echo "Hours Worked: $hoursWorked <br>";
echo "Overtime Hours: $overtimeHours<br>";

echo "========================================= <br>";
echo " Payroll Summary<br>";
echo "=========================================";
$bsalary = $rate * $hoursWorked;
$otpay = $otrate * $overtimeHours;
echo "Basic Salary: $bsalary<br>";
echo "Overtime Pay: $otpay<br>";

echo "---------------------------------------------------------------------<br>";
$gpay = $bsalary + $otpay;
echo "Gross Pay: $gpay<br>";
$tax = $gpay * 0.03;
$sss = $gpay * 0.02;
$philh = 150;
$pibig = 850;

echo "Tax (%): $tax<br>";
echo "SSS (%): $sss<br>";
echo "Philhealth : $philh<br>";
echo "Pag-IBIG : $pibig<br>";

echo "---------------------------------------------------------------------";
$tdeduc = $tax + $sss + $philh + $pibig;
echo "Total Deductions: $tdeduc<br>";
echo "=========================================<br>";
$npay = $gpay - $tdeduc;
echo "Net Pay: $npay<br>";
echo "=========================================";
?>