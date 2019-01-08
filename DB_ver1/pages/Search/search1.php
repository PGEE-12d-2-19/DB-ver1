<?php
$name=$_POST['name'];
echo '<link rel="stylesheet" type="text/css" href="../pages.css">';
include '../r.php';

$q="SELECT * FROM t1 WHERE name LIKE '$name'"; 

$result = mysqli_query($c,$q);
echo "<table align='center'>";
echo "<tr class=tr1><th>ID</th><th>Name</th><th>School</th><th>Score</th></tr>";

while($row=mysqli_fetch_array($result))

{
echo "<tr><td class=td3>".$row['id']."</td><td>".$row['name']."</td><td >".$row['school']."</td><td class=td3>".$row['score']."</td></tr>";
}
echo "</table>";

?>