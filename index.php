<?php

require_once 'student.php';

$stud = new Student();
$students = $stud->getAllStudnets();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Students</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Mark</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach($students as $row) {
                        ?>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['class']?></td>
                            <td><?php echo $row['mark']?></td>
                        <?php
                    }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>