<?php
/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 12/11/14
 * Time: 11:59 AM
 */

require 'student.php';

$student = new Student();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <b>Name   : </b> <?php echo $student->getname() ?> <br />
    <b>Id     : </b> <?php echo $student->getid() ?> <br />
    <b>Course : </b> <?php echo $student->getcourse() ?> <br />
</body>
</html>

<?php unset($student); ?>