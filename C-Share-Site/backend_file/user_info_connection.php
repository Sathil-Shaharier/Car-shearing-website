<?php
include("../backend_file/db_connection.php");

$F_Name = $_POST['FirstName'];
$L_Name = $_POST['LastName'];
$Email = $_POST['Email'];
$P_numb = $_POST['Mobile_Number'];
$Password = $_POST['password'];
$Singin_status = "<br>Unsuccessful";


$sql1 = "INSERT INTO user_signup_info(user_signup_info.FirstName, user_signup_info.LastName, user_signup_info.Email, user_signup_info.Mobile_Number, user_signup_info.password)
    VALUES ('$F_Name', '$L_Name', '$Email', '$P_numb', '$Password')";


$sql = "SELECT user_signup_info.Email, user_signup_info.password
    FROM user_signup_info
    WHERE user_signup_info.Email = '$Email' AND user_signup_info.password = '$Password'";


$result = mysqli_query($conn, $sql1);
$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);

if ($row_num == 1)
    $Singin_status = "successful";
if ($Singin_status == "successful") {
    $url = "http://localhost/C-Share-Site/user_signin.php";
    header("Refresh: 2; URL= $url");
} else {
    echo $Singin_status;
    $url = "http://localhost/C-Share-Site/user_signup.php";
    header("Refresh: 2; URL= $url");
}
