<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Online Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <strong><h3>MAKE A RESERVATION</h3></strong>
                <br />

                <?php 
                require_once 'admin/connect.php';
                if (!isset($_REQUEST['room_id']) || empty($_REQUEST['room_id'])) {
                    die("<p style='color: red;'>Room ID is missing or invalid.</p>");
                }

                $room_id = $_REQUEST['room_id'];
                $query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$room_id'") or die($conn->error);
                $fetch = $query->fetch_array();
                ?>

                <div style="height:300px; width:800px;">
                    <div style="float:left;">
                        <img src="photo/<?php echo htmlspecialchars($fetch['photo']); ?>" height="300px" width="400px">
                    </div>
                    <div style="float:left; margin-left:10px;">
                        <h3><?php echo htmlspecialchars($fetch['room_type']); ?></h3>
                        <h3 style="color:#00ff00;"><?php echo "TK. " . htmlspecialchars($fetch['price']) . ".00"; ?></h3>
                    </div>
                </div>
                <br style="clear:both;" />

                <div class="well col-md-4">
                    <form method="POST" enctype="multipart/form-data" action="add_query_reserve.php">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" class="form-control" name="firstname" required />
                        </div>
                        <div class="form-group">
                            <label>Middlename</label>
                            <input type="text" class="form-control" name="middlename" required />
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" class="form-control" name="lastname" required />
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" required />
                        </div>
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" class="form-control" name="contactno" required />
                        </div>
                        <div class="form-group">
                            <label>Check in</label>
                            <input type="date" class="form-control" name="date" required />
                        </div>
                        <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($room_id); ?>" />
                        <br />
                        <div class="form-group">
                            <button class="btn btn-info form-control" name="add_guest">
                                <i class="glyphicon glyphicon-save"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>
