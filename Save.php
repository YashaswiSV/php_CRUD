<?php

$name=$_POST["name"];
$city=$_POST["city"];

$con=new sql("localhost","root","","cybrom");
$qry="insert into student(rollno,name,city,fees) values("$name")"


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    

    ?>
</body>
</html>