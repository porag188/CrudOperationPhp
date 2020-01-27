<?php


namespace App\classes;


class student
{
    private function dbconnection(){
        $hostName='localhost';
        $userName='root';
        $password='root';
        $dbName='test';
        $conn=mysqli_connect($hostName,$userName,$password,$dbName);
        return $conn;
    }
    public function saveStudentInfo($data){
        $sql="INSERT INTO student(name,email,mobile) VALUE ('$data[name]','$data[email]','$data[mobile]')";
        if(mysqli_query(student::dbconnection(),$sql)){
            $message="add Students successfully";
            return $message;
        }else{
            die('Query problem'.mysqli_error(student::dbconnection()));
        }
    }

    //getInformation to student table
    public function  getAllStudentInfo(){
        //$conn=mysqli_connect('localhost','root','root','student');
        $sql="SELECT * FROM student";
        if(mysqli_query(student::dbconnection(),$sql)){
            $qureyResult=mysqli_query(student::dbconnection(),$sql);
            return $qureyResult;
            // echo"<pre>";
            // print_r($qureyResult);
        }else{
            die('Quary Problem'.mysqli_error(student::dbconnection()));
        }
    }

    public function getStudentInfoById($id){
        $sql="SELECT * FROM student WHERE id='$id'";
        if(mysqli_query(student::dbconnection(),$sql)){
            $qureyResult=mysqli_query(student::dbconnection(),$sql);
            return $qureyResult;
//             echo"<pre>";
//             print_r($qureyResult);
        }else{
            die('Quary Problem'.mysqli_error(student::dbconnection()));
        }
    }

    public function updateStudentInfo($data){
        $sql="UPDATE student SET name='$data[name]',email='$data[email]',mobile='$data[mobile]'WHERE id='$data[id]' ";
        if(mysqli_query(student::dbconnection(),$sql)){
            header('Location:view.php');

        }else{
            die('Quary Problem'.mysqli_error(student::dbconnection()));
        }
    }
    public function deleteStudentInfo($id){
        $sql="DELETE FROM student WHERE id='$id' ";
        if(mysqli_query(student::dbconnection(),$sql)){
          $message="Delete Successfully ";
          return $message;

        }else{
            die('Quary Problem'.mysqli_error(student::dbconnection()));
        }
    }

}