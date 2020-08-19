<?php
include("config.php");

if(isset($_POST['submit']))
{
    include("index.php");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $college=$_POST['college'];

    $linkedin=$_POST['linked'];
    $year=$_POST['year'];

    $insert="INSERT INTO inter(`name`,`email`,`college`,`linked`,`year`) VALUES('".$name."','".$email."','".$college."','".$linkedin."','".$year."')";
    $run_insert=mysqli_query($con,$insert);
    if($run_insert)
    {
        echo "<script>alert('Success fully applied.We will get back to you soon.')</script>";
    }
}
?>