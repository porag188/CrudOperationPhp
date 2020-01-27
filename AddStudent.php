<?php
require_once 'vendor/autoload.php';
use App\classes\student;
$message='';
if(isset(($_POST['btn']))){
    $message=student::saveStudentInfo($_POST);
}



?>
<h4><a href="view.php">View Student</a></h4>
<h3><?php echo $message;?></h3>
<form action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>

