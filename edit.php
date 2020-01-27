<?php
require_once 'vendor/autoload.php';
use App\classes\student;
$id=$_GET['id'];
$qureyResult=student::getStudentInfoById($id);
$student= mysqli_fetch_assoc($qureyResult);
//echo "<pre>";
//print_r($student);
if(isset(($_POST['btn']))){
    student::updateStudentInfo($_POST);
}



?>
<hr/>
<a href="view.php">View Student</a> ||
<a href="AddStudent.php">Add Student</a>
<hr/>
<form action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td>
                <input type="text" name="name" value="<?php echo $student['name'];?>">
                <input type="hidden" name="name" value="<?php echo $student['id'];?>">
            </td>
        </tr>
        <tr>
            <th>email</th>
            <td><input type="email" name="email" value="<?php echo $student['email'] ?>"></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><input type="number" name="mobile"value="<?php echo $student['mobile'] ?>" ></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>

