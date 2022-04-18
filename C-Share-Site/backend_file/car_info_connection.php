<?php
include("../backend_file/db_connection.php");

$car_name = $_POST['car_name'];
$color = $_POST['color'];
$model = $_POST['model'];
$car_number_plate = $_POST['car_number_plate'];
$description = $_POST['description'];
$Singin_status = "<br>Unsuccessful";


$sql1 = "INSERT INTO driver_car_info(driver_car_info.car_name, driver_car_info.color, driver_car_info.model, driver_car_info.car_number_plate,driver_car_info.description)
    VALUES ('$car_name', '$color', '$model', '$car_number_plate', '$description')";


$sql = "SELECT driver_car_info.car_name, driver_car_info.color
    FROM driver_car_info
    WHERE driver_car_info.car_name = '$car_name' AND driver_car_info.color = '$color'";

$result = mysqli_query($conn, $sql1);
$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);

if ($row_num == 1)
    $Singin_status = "successful";
if ($Singin_status == "successful") {
    $url = "http://localhost/C-Share-Site/waiting.php";
    header("Refresh: 2; URL= $url");
} else {
    echo $Singin_status;
    $url = "http://localhost/C-Share-Site/landing_page.php";
    header("Refresh: 2; URL= $url");
}
