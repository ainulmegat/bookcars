<?php
$cars = array (
array("Volvo", 22, 19),
array("BMW", 15, 13),
array("Saab", 5, 2),
array("Land Rover", 17, 15)
);
echo "<table border='1'>";
echo "<tr><td>Car</td><td>In Stock</td><td>Sold</td></tr>";
echo "<tr><td>".$cars[0][0]."</td><td>".$cars[0][1]."</td><td>".$cars[0][2]."</td></tr>";
echo "<tr><td>".$cars[1][0]."</td><td>".$cars[1][1]."</td><td>".$cars[1][2]."</td></tr>";
echo "<tr><td>".$cars[2][0]."</td><td>".$cars[2][1]."</td><td>".$cars[2][2]."</td></tr>";
echo "<tr><td>".$cars[3][0]."</td><td>".$cars[3][1]."</td><td>".$cars[3][2]."</td></tr>";
echo "</table>";
?>
