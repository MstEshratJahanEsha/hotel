<?php
require_once 'admin/connect.php';

if (isset($_POST['add_guest'])) {
    // Retrieve POST data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $checkin = $_POST['date'];

    // Insert guest data
    $conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno) 
                  VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno')") 
                  or die(mysqli_error($conn));

    // Fetch guest details
    $query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' 
                            AND `lastname` = '$lastname' 
                            AND `contactno` = '$contactno'")
                            or die(mysqli_error($conn));
    $fetch = $query->fetch_array();

    // Check for conflicting transactions
    $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' 
                            AND `room_id` = '$_REQUEST[room_id]' 
                            AND `status` = 'Pending'")
                            or die(mysqli_error($conn));
    $row = $query2->num_rows;

    // Validate check-in date
    if ($checkin < date("Y-m-d")) {
        echo "<script>alert('Check-in date must be today or later.')</script>";
    } else {
        if ($row > 0) {
            echo "<div class='col-md-4'>
                      <label style='color:#ff0000;'>Not Available Date</label><br />";
            $q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error($conn));
            while ($f_date = $q_date->fetch_array()) {
                echo "<ul>
                        <li>    
                            <label class='alert-danger'>" . date("M d, Y", strtotime($f_date['checkin'])) . "</label>    
                        </li>
                      </ul>";
            }
            echo "</div>";
        } else {
            if ($guest_id = $fetch['guest_id']) {
                $room_id = $_REQUEST['room_id'];
                $conn->query("INSERT INTO `transaction` (guest_id, room_id, status, checkin) 
                              VALUES ('$guest_id', '$room_id', 'Pending', '$checkin')") 
                              or die(mysqli_error($conn));
                
                // Redirect after successful reservation
                if (!headers_sent()) {
                    header("Location: reply_reserve.php");
                    exit;
                } else {
                    echo "Failed to redirect.";
                }
            } else {
                echo "<script>alert('Error: Guest ID not found.')</script>";
            }
        }
    }
}
?>
