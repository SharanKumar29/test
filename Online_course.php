<!DOCTYPE html>
<html>
<head>
    <title>Program Fee Report</title>
</head>
<body>
    <h1>Program Fee Report</h1>
    <?php
    $participant_name = $_POST['participant_name'];
    $college_name = $_POST['college_name'];
    $branch = $_POST['branch'];
    $programme = $_POST['programme'];
    $num_days = $_POST['num_days'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $typeofmember = $_POST['typeofmember'];

    // Calculate program fees based on member type
    $program_fees = 0;
    if ($typeofmember == 'Internal') {
        foreach ($programme as $prog) {
            if ($prog == 'C#') {
                $program_fees += 1000 * $num_days;
            } elseif ($prog == 'C++') {
                $program_fees += 1750 * $num_days;
            } elseif ($prog == 'C') {
                $program_fees += 1500 * $num_days;
            } elseif ($prog == 'Java') {
                $program_fees += 1250 * $num_days;
            }
        }
    } elseif ($typeofmember == 'External') {
        foreach ($programme as $prog) {
            if ($prog == 'C#') {
                $program_fees += 1500 * $num_days;
            } elseif ($prog == 'C++') {
                $program_fees += 2000 * $num_days;
            } elseif ($prog == 'C') {
                $program_fees += 1750 * $num_days;
            } elseif ($prog == 'Java') {
                $program_fees += 1500 * $num_days;
            }
        }
    }

    // Display the results
    echo "<p><strong>Participant Name:</strong> $participant_name</p>";
    echo "<p><strong>College Name:</strong> $college_name</p>";
    echo "<p><strong>Branch:</strong> $branch</p>";
    echo "<p><strong>Programme:</strong> " . implode(", ", $programme) . "</p>";
    echo "<p><strong>Number of Days:</strong> $num_days</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Type of Member:</strong> $typeofmember</p>";
    echo "<h2>Total Program Fees: Rs. $program_fees</h2>";
    ?>
</body>
</html>
