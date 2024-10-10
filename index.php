<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deHaro</title>
    <link rel="stylesheet" href="style.css">
    <script src="java.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Materials</a>
            <a href="#">Locations</a>
            <a href="#">Priorities</a>
            <a href="#">Account</a>
        </nav>
    </header>
    <?php
    $host    = "localhost";
    $user    = "root";
    $pass    = "switch11";
    $db_name = "job_supply";
    
    //create connection 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = mysqli_connect($host, $user, $pass, $db_name);

    $jobresult = mysqli_query($connection, "SELECT * FROM job");
    while($jobrow = mysqli_fetch_array($jobresult))
    {
    echo'
    <details id="jobs">
    <summary>'. $jobrow['job_name'] .'</summary> 
        <!--Contract-->
        <details class="sub1">
        <summary>Contract</summary>
        <input type="button" value="Add New" onclick="onContractClick()" class="show" id="contractadd">
        <input type="button" value="Cancel" onclick="onContractCancelClick()" class="hide" id="contractcancel">
        <input id="contracttext" type="text" class="hide">
        <input type="button" value="Submit" class="hide" id="contractsubmit" onclick="onContractCancelClick()">
        </details>
        <!--Info-->
        <details class="sub1">
        <summary>Info</summary>
            <div class="data">
            <p>Phone Number:</p>
            <p>Email:</p>
            <p>Address:</p>
            <p>Date Started</p>
            </div>
        </details>
        <!--Materials-->
        <details class="sub1">
        <summary>Materials</summary>
            <!--Doors-->
            <details class="sub2" open>
            <summary>Doors</summary>
            <p></p> 
            <input type="button" value="Add New" onclick="onDoorClick()" class="show" id="dooradd">
            <input type="button" value="Cancel" onclick="onDoorCancelClick()" class="hide" id="doorcancel">
            <form action="door.php" method="POST">
            <input type="text" name"doorinput" class="hide" id="doortext" placeholder="ENTER TEXT">
            <button type="submit" name="doorsub" class="hide" id="doorsubmit">Submit</button>
            </form>
            </details>
            <!--Windows-->
            <details class="sub2" open>
            <summary>Windows</summary>
            <input type="button" value="Add New" class="add">
            </details>
        <input type="button" value="Add New" class="add">
        </details>
        <!--Categories-->
        <details class="sub1">
        <summary>Category</summary>
            <div class="data">
            <p>Plumbing</p>
            <p>Framing</p>
            <p>Electrical</p>
            <p>Drywall</p>
            <p>Cabinets</p>
            </div>
        </details>
        
    </details>
    
    ';
}

?>
    <input type="button" value="ADD NEW" onclick="onJobClick()" class="show" id="jobadd">
    <input type="button" value="Cancel" onclick="onJobCancelClick()" class="hide" id="jobcancel">
    <form action="job.php" method="POST">
    <input type="text" name="jobinput" class="hide" id="jobtext" placeholder="ENTER TEXT">
    <button type="submit" name="submit" class="hide" id="jobsubmit">Submit</button>
    </form>

    <input type="button" value="DELETE" onclick="onDeleteClick()" class="show" id="delete">
    <input type="button" value="Cancel" onclick="onDeleteCancelClick()" class="hide" id="deletecancel">
    <form action="delete.php" method="POST">
    <input type="text" name="deleteinput" class="hide" id="deletetext" placeholder="ENTER TEXT">
    <button type="submit" name="deletesub" class="hide" id="deletesubmit">Submit</button>
    </form>
</body>
</html>