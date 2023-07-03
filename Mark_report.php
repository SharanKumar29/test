<!DOCTYPE html>
<html>
<head>
    <title>Mark Management Report</title>
</head>
<body>
    <h1>Mark Management Report</h1>
    <?php
    $sname = $_POST['sname'];
    $rollno = $_POST['rollno'];
    $department = $_POST['department'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];

    // Calculate average marks
    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $averageMarks = $totalMarks / 5;

    // Determine pass/fail result
    $passFailResult = ($subject1 >= 50 && $subject2 >= 50 && $subject3 >= 50 && $subject4 >= 50 && $subject5 >= 50) ? 'Pass' : 'Fail';

    // Determine class
    if ($averageMarks >= 80) {
        $class = 'Distinction';
    } elseif ($averageMarks >= 60) {
        $class = 'First Class';
    } elseif ($averageMarks >= 50) {
        $class = 'Second Class';
    } else {
        $class = 'No Class';
    }

    // Display the results
    echo "<p><strong>Student Name:</strong> $sname</p>";
    echo "<p><strong>Roll Number:</strong> $rollno</p>";
    echo "<p><strong>Department:</strong> $department</p>";
    echo "<p><strong>Subject 1:</strong> $subject1</p>";
    echo "<p><strong>Subject 2:</strong> $subject2</p>";
    echo "<p><strong>Subject 3:</strong> $subject3</p>";
    echo "<p><strong>Subject 4:</strong> $subject4</p>";
    echo "<p><strong>Subject 5:</strong> $subject5</p>";
    echo "<p><strong>Average Marks:</strong> $averageMarks</p>";
    echo "<p><strong>Result:</strong> $passFailResult</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    ?>
</body>
</html>
