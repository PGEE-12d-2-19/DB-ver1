<?php
echo '<link rel="stylesheet" type="text/css" href="../pages.css">';
include '../r.php';

$q="SELECT * FROM t1 ORDER BY score DESC,name";
$result=mysqli_query($c,$q); 
echo "<table><tr><th>ID</th><th>Име</th><th>Училище</th><th>Резултат</th></tr>";
while ($row=mysqli_fetch_array($result))
{echo "<tr><td class='td3'>".$row['id']."</td><td>".$row['name']."</td><td>".$row['school']."</td><td class='td3'>".$row['score']."</td></tr>";
};
echo "</table>";
?>