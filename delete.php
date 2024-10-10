<?php
$host    = "localhost";
$user    = "root";
$pass    = "switch11";
$db_name = "job_supply";

$conn = mysqli_connect($host , $user , $pass , $db_name);
if(isset($_POST['deletesub'])){
    $name = $_POST['deleteinput'];

    $query = "DELETE FROM job WHERE job_name='$name'";
    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        header("Location: index.php");
    }
}

?>