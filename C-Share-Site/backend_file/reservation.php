<?php
include("../backend_file/db_connection.php");

$origin = $_POST['origin'];
$destination = $_POST['destination'];
$seat = $_POST['seat'];
$name = $_POST['name'];
$number = $_POST['number'];
$price = $_POST['price'];
$Singin_status = "<br>Unsuccessful";


$sql1 = "INSERT INTO reservation_request(reservation_request.origin, reservation_request.destination, reservation_request.total_seat, reservation_request.username,reservation_request.number,reservation_request.price)
    VALUES ('$origin', '$destination', '$seat', '$name', '$number', '$price')";

$sql = "SELECT reservation_request.username, reservation_request.number
    FROM reservation_request
    WHERE reservation_request.username = '$name' AND reservation_request.number = '$number'";

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
