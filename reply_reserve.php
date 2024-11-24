<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Online Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require('inc/links.php'); ?>
    <style>
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
        .well {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require('inc/header.php'); ?>
    <div class="container center-container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="well col-md-12">
                    <h3>Please visit our Hotel for verification</h3>
                    <br />
                    <h4>THANK YOU!</h4>
                    <br />
                    <a href="rooms.php" class="btn btn-success">
                        <i class="glyphicon glyphicon-check"></i> Back to reservation
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php'); ?>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>
