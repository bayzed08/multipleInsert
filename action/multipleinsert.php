<?php
include("../db_connect.php");
$playername = $_POST['pname'];
$country = $_POST['country'];
foreach ($playername as $key => $value) {
    $sql = "insert into countryUser(fullname,country,entryDate)
    values('$value','$country',now())";
    $query = mysqli_query($connect, $sql);
}

if ($query == "true") {
    echo "Successfully Added multiple data";
} else {
    echo "NOT Successfull";
}
