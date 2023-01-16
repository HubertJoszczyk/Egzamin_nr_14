<?php
$conn=mysqli_connect("localhost","root","","wedkowanie");
$imie=$_POST['Imie'];
$nazwisko=$_POST['Nazwisko'];
$adres=$_POST['Adres'];
$sql="INSERT into Karty_wedkarskie values('','$imie','$nazwisko','$adres',NULL,NULL)";
$query=mysqli_query($conn,$sql);

mysqli_close($conn);
?>