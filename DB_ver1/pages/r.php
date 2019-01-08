<?php
$c=mysqli_connect("localhost","root","") or die ("No Connect !");
mysqli_query($c,'set names utf8');
$s=mysqli_select_db($c,"db1") or die("No DB selected!");
?>