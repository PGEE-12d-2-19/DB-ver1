<?php
$score1=$_POST['score1'];
$score2=$_POST['score2'];
echo '<link rel="stylesheet" type="text/css" href="../pages.css">';
include '../r.php';

$q="SELECT * FROM t1 WHERE(score BETWEEN $score1 AND $score2) ORDER BY score DESC,name"; 
//$q="SELECT * FROM t1 ORDER BY score DESC LIMIT 10";
$result = mysqli_query($c,$q);
echo "<table align='center'>";
echo "<tr class=tr1><th>ID</th><th>Name</th><th>School</th><th>Score</th></tr>";

while($row=mysqli_fetch_array($result))

{
echo "<tr><td class=td3>".$row['id']."</td><td>".$row['name']."</td><td >".$row['school']."</td><td class=td3>".$row['score']."</td></tr>";
}
echo "</table>";

?>