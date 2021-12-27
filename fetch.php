<?php
include("db_connect.php");
$sql = "SELECT * FROM countryUser";
$query = mysqli_query($connect, $sql);
$output = "";
while ($row = mysqli_fetch_array($query)) :
    $output .= '<tr>
                  <td>' . $row["fullName"] . '</td>
                  <td>' . $row["country"] . '</td>
                  <td>' . $row["isActive"] . '</td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
              </tr>';
endwhile;

echo $output;
