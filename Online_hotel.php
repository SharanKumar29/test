<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management Report</title>
</head>
<body>
    <h1>Hotel Management Report</h1>
    <?php
    $id_no = $_POST['id_no'];
    $cname = $_POST['cname'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $emailid = $_POST['emailid'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $roomtype = $_POST['roomtype'];
    $no_of_stay = $_POST['no_of_stay'];
    $typeofpackage = $_POST['typeofpackage'];

    // Calculate room charges based on package type
    $room_charges = 0;
    if ($typeofpackage == 'Summer') {
        if ($roomtype == 'Super Deluxe') {
            $room_charges = 1500 * $no_of_stay;
        } elseif ($roomtype == 'Deluxe') {
            $room_charges = 1000 * $no_of_stay;
        } elseif ($roomtype == 'Double') {
            $room_charges = 750 * $no_of_stay;
        } elseif ($roomtype == 'Single') {
            $room_charges = 500 * $no_of_stay;
        }
    } elseif ($typeofpackage == 'Non-Summer') {
        if ($roomtype == 'Super Deluxe') {
            $room_charges = 1250 * $no_of_stay;
        } elseif ($roomtype == 'Deluxe') {
            $room_charges = 750 * $no_of_stay;
        } elseif ($roomtype == 'Double') {
            $room_charges = 600 * $no_of_stay;
        } elseif ($roomtype == 'Single') {
            $room_charges = 300 * $no_of_stay;
        }
    }

    // Display the results
    echo "<p><strong>ID Number:</strong> $id_no</p>";
    echo "<p><strong>Customer Name:</strong> $cname</p>";
    echo "<p><strong>Address Line 1:</strong> $add1</p>";
    echo "<p><strong>Address Line 2:</strong> $add2</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>PIN:</strong> $pin</p>";
    echo "<p><strong>Email ID:</strong> $emailid</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Sex:</strong> $sex</p>";
    echo "<p><strong>Room Type:</strong> $roomtype</p>";
    echo "<p><strong>Number of Days Stay:</strong> $no_of_stay</p>";
    echo "<p><strong>Type of Package:</strong> $typeofpackage</p>";
    echo "<h2>Total Room Charges: Rs. $room_charges</h2>";
    ?>
</body>
</html>
