<!DOCTYPE html>
<html>
<head>
    <title>Selection Results</title>
</head>
<body>
    <h1>Selection Results</h1>
    <?php
    $id_no = $_POST['id_no'];
    $name = $_POST['name'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];
    $qualification = $_POST['qualification'];
    $class = $_POST['class'];
    $experience = $_POST['experience'];
    $age = $_POST['age'];

    // Check criteria for selection
    $selectionCriteria = '';
    if ($qualification == 'UG' && $class == 'Distinction' && $experience == '3+' && $age <= 30) {
        $selectionCriteria = 'Selected (UG)';
    } elseif ($qualification == 'PG' && $class == 'First Class' && $experience != '0-1' && $age <= 35) {
        $selectionCriteria = 'Selected (PG)';
    } else {
        $selectionCriteria = 'Not Selected';
    }

    // Display the results
    echo "<p><strong>ID:</strong> $id_no</p>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Address Line 1:</strong> $add1</p>";
    echo "<p><strong>Address Line 2:</strong> $add2</p>";
    echo "<p><strong>City:</strong> $city</p>";
    echo "<p><strong>PIN:</strong> $pin</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Sex:</strong> $sex</p>";
    echo "<p><strong>Qualification:</strong> $qualification</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Experience:</strong> $experience</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<h2>$selectionCriteria</h2>";
    ?>
</body>
</html>
