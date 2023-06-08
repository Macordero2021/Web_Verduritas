<?php
include "../includes/conexiondb.php";

$query = "SELECT *FROM usuarios";
$result = $conn ->query($query);
if ($result ->num_rows > 0)
{
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
else
{
    $options = [];
}

?>