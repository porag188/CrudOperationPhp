<?php
require_once 'vendor/autoload.php';
use App\classes\student;
 $message=' ';

 if(isset($_GET['delete'])){
     $id=$_GET['id'];
     $message=student::deleteStudentInfo($id);
 }





$studentInfo=student::getAllStudentInfo();


?>
<h3><a href="AddStudent.php"> Add Student </a></h3>
<h3><a href="edit.php.php"> Edit Student </a></h3><hr/>
<h4><?php echo $message;?></h4>
<table border="1" width="700">
    <tr>
        <th>Student id</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
    </tr>
    <tr>
        <?php  while($view=mysqli_fetch_assoc($studentInfo)){ ?>
    </tr>

    <tr>
        <td><?php echo $view['id'] ?></td>
        <td><?php echo $view['name']?></td>
        <td><?php echo $view['email'] ?></td>
        <td><?php echo $view['mobile'] ?></td>
        <td>
            <a href="edit.php? id=<?php echo $view['id']; ?>">Edit</a>
            <a href="?delete=true & id=<?php echo $view['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php  } ?>

</table>
