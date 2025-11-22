<!DOCTYPE HTML>
<html>
<head>
    <title>Student Array Sorting</title>
</head>
<body>
<?php
$students = array("Anu", "Aishu", "Niya", "Aswani", "Karu");

echo "Original Array :<br>";
print_r($students);

asort($students);
echo "<br><br>Ascending Order :<br>";
print_r($students);

arsort($students);
echo "<br><br>Descending Order :<br>";
print_r($students);
?>

</body>
</html>

