<?php
$host    = "localhost";
$user    = "root";
$pass    = "switch11";
$db_name = "job_supply";

$conn = mysqli_connect($host , $user , $pass , $db_name);
if(isset($_POST['submit'])){
    $name = $_POST['jobinput'];

    $query = "insert into job(job_name) values('$name')";
    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        header("Location: index.php");
    }
}
?>