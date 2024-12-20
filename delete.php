<?php

require_once 'student.php';

if(isset($_POST['submit'])) {
    $studId = $_POST['studId'];

    $stud = new Student();
    $result = $stud->deleteStudents($studId);

    if ($result) {
        echo "Deleted Successfully";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Delete Student</h3>
        <form method="POST">
            <div>
                <label for="studId">ID: </label>
                <input type="number" name="studId" id="studId">
            </div>
            <button type="submit" name="submit">Delete</button>
        </form>
    </div>
</body>
</html>