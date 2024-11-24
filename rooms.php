<?php
require_once 'admin/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Hotel Reservation</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $stmt = $conn->prepare("SELECT * FROM `room` ORDER BY `price` ASC");
            $stmt->execute();
            $query = $stmt->get_result();
            while ($fetch = $query->fetch_assoc()) {
                $photo = file_exists("photo/" . $fetch['photo']) ? $fetch['photo'] : "default.jpg";
            ?>
                <div class="col-md-6 mb-4">
                    <div class="room-container">
                        <div class="room-image">
                            <img src="photo/<?php echo htmlspecialchars($photo, ENT_QUOTES, 'UTF-8'); ?>" 
                                 alt="<?php echo htmlspecialchars($fetch['room_type'], ENT_QUOTES, 'UTF-8'); ?>" 
                                 class="img-fluid">
                        </div>
                        <div class="room-details">
                            <h3><?php echo htmlspecialchars($fetch['room_type'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <h4 class="text-success">Price: TK. <?php echo htmlspecialchars($fetch['price'], ENT_QUOTES, 'UTF-8'); ?>.00</h4>
                            <a href="add_reserve.php?room_id=<?php echo $fetch['room_id']; ?>" class="btn btn-info mt-3">
                                <i class="glyphicon glyphicon-list"></i> Reserve
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

</body>
</html>
