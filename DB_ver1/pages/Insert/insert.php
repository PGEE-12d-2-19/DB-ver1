<?php
$name=$_POST['name'];
$school=$_POST['school'];
$score=$_POST['score'];

include '../r.php';
$query ="INSERT INTO t1 (name, school, score) VALUES ('$name','$school','$score')";
$result=mysqli_query($c,$query);
if ($result) {echo "<a href=../List/list.php> LIST </a>";} 
else echo "0 records added";
?>