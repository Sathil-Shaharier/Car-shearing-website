<?php 
    $pageTitle = 'Dashboard';
    include 'connect.php';
    include 'functions/functions.php'; 
     ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<title><?php echo $pageTitle ?></title>

  		<!-- FONTS FILE -->
  		<link href="http://localhost/cShare/css/all.min.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  		<!-- Nunito FONT FAMILY FILE -->
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  		<!-- CSS FILES -->
  		<link href="css/sb-admin-2.css" rel="stylesheet">
  		<link href="css/main.css" rel="stylesheet">
		
	</head>

	<body id="page-top">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mt-5 text-success mb-0 ">Driver Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            <!-- Cancel Reservation Button Submitted -->
            <?php
                if (isset($_POST['cancel_reservation_sbmt']) && $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $reservation_id = $_POST['id'];
                    $reservation_cancellation_reason = test_input($_POST['reservation_cancellation_reason']);
                    try
                    {
                        $stmt = $con->prepare("UPDATE reservation_request set cancel = 1, cancel_reason = ? where id = ?");
                        $stmt->execute(array($reservation_cancellation_reason, $reservation_id));
                        echo "<div class = 'alert alert-success'>";
                            echo 'Reservation has been canceled succssefully!';
                        echo "</div>";
                    }
                    catch(Exception $e)
                    {
                        echo "<div class = 'alert alert-danger'>";
                            echo 'Error occurred: ' .$e->getMessage();
                        echo "</div>";
                    }
                }
            ?>

            <!-- Accept Reservation Button Submitted -->
            <?php
                if (isset($_POST['accept_reservation_sbmt']) && $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $reservation_id = $_POST['id'];
                    $reservation_accept_reason = test_input($_POST['reservation_accept']);
                    try
                    {
                        $stmt = $con->prepare("UPDATE reservation_request set accept = 1, reservation_accept = ? where id = ?");
                        $stmt->execute(array($reservation_accept_reason, $reservation_id));
                        echo "<div class = 'alert alert-success'>";
                            echo 'Reservation has been canceled succssefully!';
                        echo "</div>";
                    }
                    catch(Exception $e)
                    {
                        echo "<div class = 'alert alert-danger'>";
                            echo 'Error occurred: ' .$e->getMessage();
                        echo "</div>";
                    }
                }
            ?>

            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Users
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("id","user_signup_info")?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="bs bs-boy fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Drivers
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("id","driver_signup_info")?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="bs bs-scissors-1 fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Total Cars
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo countItems("id","driver_car_info")?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="bs bs-man fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Total Reservations
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("id","reservation_request")?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reservations Tables -->
            <div class="card shadow mb-4">
                <div class="card-header tab" style="padding: 0px !important;background: #36b9cc!important">
                    <button class="tablinks active" onclick="openTab(event, 'Upcoming')">
                        Upcoming Reservations
                    </button>
                    
                    <button class="tablinks" onclick="openTab(event, 'Accept')">
                        Accept Reservations
                    </button>
                    <button class="tablinks" onclick="openTab(event, 'Canceled')">
                        Canceled Reservations
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tabcontent" id="Upcoming" style="display:table" width="100%" cellspacing="0">
                            <thead>
                                    <tr>
                                        <th>
                                            Origin
                                        </th>
                                        <th>
                                            Destination
                                        </th>
                                        <th>
                                            Seat
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Number
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Accept
                                        </th>
                                        <th>
                                            Cancel
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $stmt = $con->prepare("SELECT * 
                                                        FROM reservation_request r
                                                        where cancel = 0 and accept=0
                                    
                                                        ");
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll();
                                        $count = $stmt->rowCount();
                                        
                                        if($count == 0)
                                        {

                                            echo "<tr>";
                                                echo "<td colspan='8' style='text-align:center;'>";
                                                    echo "List of your upcoming reservations will be presented here";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                        else
                                        {

                                            foreach($rows as $row)
                                            {
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $row['origin'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['destination'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['total_seat'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['username'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['number'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['price'];
                                                    echo "</td>";
                                                    
                                                    
                                                    echo "<td>";
                                                        
                                                        $accept_data = "cancel_reservation_".$row["id"];
                                                        ?>
                                                        <ul class="list-inline m-0">

                                                            <!-- Submit BUTTON -->

                                                            <li class="list-inline-item" data-toggle="tooltip" title="Accept Reservation">
                                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $accept_data; ?>" data-placement="top">
                                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                </button>

                                                                <!-- Submit MODAL -->
                                                                <div class="modal fade" id="<?php echo $accept_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $accept_data; ?>" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <form action = "driver_dashboard.php" method = "POST">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Accept Reservation</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to accept this reservation?</p>
                                                                                    <input type="hidden" value = "<?php echo $row['id']; ?>" name = "id">
                                                                                    <div class="form-group">
                                                        
                                                                                        <textarea class="form-control" name = "reservation_accept" value='Yes'></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                                    <button type="submit" name = "accept_reservation_sbmt"  class="btn btn-danger">Yes, Accept</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </li>

                                                        
                                                        </ul>

                                                        <?php
                                                    echo "</td>";
                                                    echo "<td>";
                                                        $cancel_data = "accept_reservation_".$row["id"];
                                                        
                                                        ?>
                                                        <ul class="list-inline m-0">

                            

                                                            <!-- CANCEL BUTTON -->

                                                            <li class="list-inline-item" data-toggle="tooltip" title="Cancel Reservation">
                                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $cancel_data; ?>" data-placement="top">
                                                                    <i class="fas fa-calendar-times"></i>
                                                                </button>

                                                                <!-- CANCEL MODAL -->
                                                                <div class="modal fade" id="<?php echo $cancel_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $cancel_data; ?>" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <form action = "driver_dashboard.php" method = "POST">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Cancel Reservation</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to cancel this reservation?</p>
                                                                                    <input type="hidden" value = "<?php echo $row['id']; ?>" name = "id">
                                                                                    <div class="form-group">
                                                                                        <label>Tell Us Why?</label>
                                                                                        <textarea class="form-control" name = "reservation_cancellation_reason"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                                    <button type="submit" name = "cancel_reservation_sbmt"  class="btn btn-danger">Yes, Cancel</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </li>
                                                        </ul>

                                                        <?php
                                                    echo "</td>";
                                                echo "</tr>";
                                            }
                                        }

                                    ?>

                                </tbody>
                        </table>
                        

                        <table class="table table-bordered tabcontent" id="Accept" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        Origin
                                    </th>
                                    <th>
                                        Destination
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Seat
                                    </th>
                                    <th>
                                        Number
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $stmt = $con->prepare("SELECT * 
                                                    FROM reservation_request
                                                    where accept = 1
                                                    ");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    $count = $stmt->rowCount();

                                    if($count == 0)
                                    {

                                        echo "<tr>";
                                            echo "<td colspan='6' style='text-align:center;'>";
                                                echo "List of your canceled reservations will be presented here";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    else
                                    {

                                        foreach($rows as $row)
                                        {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $row['origin'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['destination'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['username'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['total_seat'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['number'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['price'];
                                            echo "</td>";
                                        
                                            echo "</tr>";
                                        }
                                    }

                                ?>

                            </tbody>
                        </table>

                        <table class="table table-bordered tabcontent" id="Canceled" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        Origin
                                    </th>
                                    <th>
                                        Destination
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Seat
                                    </th>
                                    <th>
                                        Number
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Cancellation Reason
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $stmt = $con->prepare("SELECT * 
                                                    FROM reservation_request
                                                    where cancel = 1
                                                    ");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    $count = $stmt->rowCount();

                                    if($count == 0)
                                    {

                                        echo "<tr>";
                                            echo "<td colspan='7' style='text-align:center;'>";
                                                echo "List of your canceled reservations will be presented here";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    else
                                    {

                                        foreach($rows as $row)
                                        {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $row['origin'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['destination'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['username'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['total_seat'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['number'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['price'];
                                            echo "</td>";
                                                echo "<td>";
                                                    echo $row['cancel_reason'];
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                    }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
 <?php include 'footer.php' ?>
