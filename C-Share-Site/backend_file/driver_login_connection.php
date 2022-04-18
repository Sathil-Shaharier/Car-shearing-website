<?php
include("../backend_file/db_connection.php");

$Email = $_POST['Email'];
$Password = $_POST['Pasword'];


$sql = "SELECT driver_signup_info.email, driver_signup_info.password \n"

    . "FROM driver_signup_info\n"

    . "WHERE driver_signup_info.email = '$Email' AND driver_signup_info.password = '$Password'";

$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);
if ($row_num == 1)
    $login_status = "successful";
if ($login_status == "successful") {
    $url = "http://localhost/C-Share-Site/driver/driver_car_info.php";
    header("Refresh: 0; URL= $url");
} else {
    echo $login_status;
    $url = "http://localhost/C-Share-Site/driver/driver_signin.php";
    header("Refresh: 0; URL= $url");
}
