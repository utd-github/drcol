<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createclass_schedule();
            break;
        case 'r':
            readclass_schedule();
            break;
        case 'u':
            updateclass_schedule();
            break;
        case 'd':
            deleteclass_schedule();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new class_schedule
function createclass_schedule()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["class_id"])&& isset($_POST["std_id"])  && isset($_POST["dayOfweek"]) && isset($_POST["star_time"]) && isset($_POST["end_time"])  )
  
     {
            $class_id = $_POST["class_id"];
            $std_id = $_POST["std_id"];
            $dayOfweek = $_POST["dayOfweek"];
            $star_time = $_POST["star_time"];
            $end_time = $_POST["end_time"];

            $stmts = $conn->prepare("INSERT INTO `class_schedule`( `class_id`, `std_id`, `dayOfweek`, `star_time`,`end_time`)
        VALUES (?,?,?,?,?)");
    
            $stmts->bind_param( "sssss", $class_id, $std_id,$dayOfweek, $star_time, $end_time);
            $res = $stmts->execute(); //get result
            $stmts->close();
    
            $user_id = mysqli_insert_id($conn);
            if ($user_id > 0) {
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo "Empty post params!";
        }
    }

    function readclass_schedule()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from class_schedule";
    //Query Call
    $res = $conn->query($sql);
    //Check if Result is empty
    if ($res->num_rows > 0) {

        //loop to print the data
        while ($row = $res->fetch_assoc()) {
            $array[] = $row;
        }

        header('Content-type:Application/json');
        echo json_encode($array);
    } else {
        echo "1";
    }
    $conn->close();
}

// update class_schedule
function updateclass_schedule()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete class
function deleteclass_schedule()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}

