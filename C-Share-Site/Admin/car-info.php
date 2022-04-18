<?php
    session_start();

    //Page Title
    $pageTitle = 'Car Info';

    //Includes
    include 'connect.php';
    include 'functions/functions.php'; 
    include 'header.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
    
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Cars</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            <?php
            
            if (isset($_POST['delete_type_sbmt']) && $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $type_id = $_POST['id'];
                    try
                    {
                        $stmt = $con->prepare("DELETE FROM driver_car_info where id = ?");
                        $stmt->execute(array($type_id));
                        echo "<div class = 'alert alert-success'>";
                            echo 'Car Type has been deleted successfully';
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

            <!-- Cars Info Table -->
            <?php
                $stmt = $con->prepare("SELECT * FROM driver_car_info");
                $stmt->execute();
                $rows_cars = $stmt->fetchAll();

            ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Cars</h6>
                </div>
                <div class="card-body">
                   
                    <!-- Cars Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    
                                    <th>Car Name</th>
                                    <th>Color</th>
                                    <th>Model</th>
                                    <th>Car Number Plate</th>
                                    <th style = "width:30%">Description</th>
                                    <th>Manage</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php
                                foreach($rows_cars as $car)
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $car['car_name'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['color'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['model'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['car_number_plate'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['description'];
                                        echo "</td>";
                                        echo "<td>";
                                            $delete_data = "delete_".$car["id"];
                                            ?>
                                            <!-- DELETE BUTTON -->
                                            <ul>
                                                <li class="list-inline-item" data-toggle="tooltip" title="Edit">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" ><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item" data-toggle="tooltip" title="Delete">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $delete_data; ?>" data-placement="top"><i class="fa fa-trash"></i></button>
                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="<?php echo $delete_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $delete_data; ?>" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                        <form action = "car-info.php" method = "POST">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Car</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this Car?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="delete_type_sbmt" data-id = "<?php echo $car['id']; ?>" class="btn btn-danger delete_car_bttn">Delete</button>
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
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php 
        include 'footer.php';
?>