<?php

require_once 'student.php';

if(isset($_POST['submit'])) {
    $studId = $_POST['studId'];
    $studName = $_POST['studName'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];

    $stud = new Student();
    $result = $stud->updateStudents($studId, $studName, $class, $mark);

    if ($result) {
        echo "Updated Successfully";
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
    <h3>update Student</h3>
    <div>
        <form method="POST">
            <div>
                <label for="studId">ID: </label>
                <input type="number" name="studId" id="studId">
            </div>
            <div>
                <label for="studName">Name: </label>
                <input type="text" name="studName" id="name">
            </div>
            <div>
                <label for="class">Class: </label>
                <input type="text" name="class" id="class">
            </div>
            <div>
                <label for="mark">Mark: </label>
                <input type="number" name="mark" id="mark">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>