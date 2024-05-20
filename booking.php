

<?php
$host="localhost";      //Host name
$username="root";       // Mysql username
$password="";           // Mysql password 
$db_name="test";        // Database name
$tbl_name="booking";    // Table name

mysql_connect("$host","$username","$password")or die('cannot connect server');
mysql_select_db("$db_name")or die('cannot select DB');

$date=$_POST["date"];
$time=$_POST["time"];
$from=$_POST["from"];
$to=$_POST["to"];
$airline=$_POST["airline"];
$seat=$_POST["seat"];
$row=$_POST["row"];
$input=$_POST["input"];
$group=$_POST["group"];
$date=$_POST["date"];
$time=$_POST["time"];

$sql="INSERT INTO booking VALUES ('$date','$time','$from','$to','$airline','$seat','$row','$input','$group','$date','$time')";
$result=mysql_query($sql);

if($result){
    echo "<a href='view-booking.php'>View Booking</a>"; //Link to view Booking Page
}
mysqli_close();