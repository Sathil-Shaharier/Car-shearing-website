<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/C-Share-Site/css/landing_page.css" />
    <link rel="stylesheet" href="http://localhost/cShare/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css" />
    <link rel="stylesheet" href="http://localhost/C-Share-Site/css/map.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://localhost/C-Share-Site/js/mapscript.js" defer></script>

    <title>C-Share</title>
</head>

<body>

    <div class="full_wrapper">
        <div class="wrapper">
            <div class="menubar">
                <img src="http://localhost/C-Share-Site/img/Free_Sample_By_Wix.jpg" alt="">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">complain</a></li>
                    <li><a href="#">contact</a></li>
                    <li><a href="#"><i class="fa-solid fa-user-vneck"></i>Profile</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="full_wrapper">
        <div class="wrapper header">
            <div class="row-1">
                <div class="col-1">
                    <h1>Pic Up location</h1>
                    <i class="fa-solid fa-location-dot"></i><input type="text" class="input_fiels" placeholder="Pic Up Location">
                </div>
                <div class="col-2">
                    <h1>Destination location</h1>
                    <i class="fa-solid fa-location-dot"></i><input type="text" class="input_fiels" placeholder="Destination Location">
                </div>
                <div class="col-3">
                    <h1>Pic Up Time</h1>
                    <i class="fa-solid fa-calendar"></i><input type="text" class="input_fiels" placeholder="Pic Up Time">
                </div>
                <div class="col-4">
                    <h1>Drop off time</h1>
                    <i class="fa-solid fa-calendar"></i><input type="text" class="input_fiels" placeholder="Drop off time">
                </div>
            </div>
        </div>
    </div>

    <div class="full_wrapper">
        <div class="wrapper banner">
            <div class="row-1">
                <img src="http://localhost/C-Share-Site/img/Silver_yaris_in_pod_car_share_bay_lower_res.webp" alt="">
                <img class="pic" src="http://localhost/C-Share-Site/img/banner-2.webp" alt="">
            </div>


            <div class="row-2">
                <a href="http://localhost/C-Share-Site/map.php">Full screen</a>
                <div id='map'></div>
            </div>
        </div>
    </div>

    <div class="full_wrapper">
        <div class="wrapper">

        </div>
    </div>
    <div class="info_collect">
        <table>
            <tr>
                <td>
                    <form  action="http://localhost/C-Share-Site/backend_file/reservation.php" method="post">
                        <div>
                            <label for="">Origin</label>
                            <select id="origin" name="origin" class="form-select" aria-label="Default select example">
                                <option selected>Origin</option>
                                <option id="Dhanmondi" value="Dhanmondi">Dhanmondi</option>
                                <option id="Uttara" value="Uttara">Uttara</option>
                                <option id="NSU" value="NSU">NSU</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Destination</label>
                            <select id="destination" name="destination" class="form-select" aria-label="Default select example">
                                <option selected>Destination</option>
                                <option id="Dhanmondi" value="Dhanmondi">Dhanmondi</option>
                                <option id="Uttara" value="Uttara">Uttara</option>
                                <option id="NSU" value="NSU">NSU</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Seat</label>
                            <select id="seat" name="seat" class="form-select" aria-label="Default select example">
                                <option selected>How many seat you want?</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Name" id="name">
                        </div>
                        <div>
                            <label for="">Number</label>
                            <input type="number" name="number" placeholder="Number" id="number">
                        </div>
                        <div>
                            <label for="">Price</label>
                            <input type="number" name="price" placeholder="Price" id="price">
                        </div>
                        <div class="form-action-buttons">
                            <input type="submit" value="Submit this reservation">
                        </div>  
                    </form>
                    <div class="form-action-button">
                            <button onclick="checkPrice()" style="border: none;" id="see_price">See_Price</button>
                    </div>
                </td>
                
            </tr>
            <tr>

            </tr>
        </table>
    </div>
    <script src="js/Check_Price.js"></script>

    <?php include 'footer.php' ?>