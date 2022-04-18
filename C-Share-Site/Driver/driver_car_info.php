<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/car_info.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="link">
        <h1><a class="a1" href="driver_dashboard.php">Click Me!! If You Fill your Car info Befor..</a></h1>
    </div>

    <div class="title1">
        <h1>Input Your Car Info Here</h1>
    </div>
<div class="info_collect">
        <table>
            <tr>
                <td>
                    <form  autocomplete="off" action="http://localhost/C-Share-Site/backend_file/car_info_connection.php" method="post">
                        <div>
                            <label for="">Car Name</label>
                            <input type="text" name="car_name" placeholder="Car Name" id="car_name">
                        </div>
                        <div>
                            <label for="">Color</label>
                            <input type="text" name="color" placeholder="Color" id="color">
                        </div>
                        <div>
                            <label for="">Model</label>
                            <input type="number" name="model" placeholder="Model" id="model">
                        </div>
                        <div>
                            <label for="">Car Number Plate</label>
                            <input type="text" name="car_number_plate" placeholder="Car Number Plate" id="car_number_plate">
                        </div>
                        <div>
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Description" id="description">
                        </div>
                        <div class="form-action-buttons">
                            <input type="submit" value="Submit">
                        </div>  
                    </form>
                </td>
                
            </tr>
            <tr>

            </tr>
        </table>
    </div>

    <?php include 'footer.php' ?>