<?php
$host    = "localhost";
$user    = "root";
$pass    = "switch11";
$db_name = "job_supply";

$conn = mysqli_connect($host , $user , $pass , $db_name);
if(isset($_POST['doorsub'])){
    $name = $_POST['doorinput'];

    $query = "insert into doors(door_style) values('$name')";
    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        header("Location: index.php");
    }
}
?>