<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createclass();
            break;
        case 'r':
            readclass();
            break;
        case 'u':
            updateclass();
            break;
        case 'd':
            deleteclass();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}


// Create new class
function createclass()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["cname"])&& isset($_POST["tid"])  && isset($_POST["tname"]) && isset($_POST["subid"]) && isset($_POST["subname"]) 
    && isset($_POST["room"])  && isset($_POST["des"]) )  
     {
            $class_name = $_POST["cname"];
            $teacher_id = $_POST["tid"];
            $teacher_name = $_POST["tname"];
            $std_id = $_POST["subid"];
            $std_name = $_POST["subname"];
            $semester = $_POST["room"];
            $des = $_POST["des"];
           

            $stmts = $conn->prepare("INSERT INTO `mclass`( `cname`, `tid`, `tname`, `subid`,`subname`, `room `, `des`)
        VALUES (?,?,?,?,?,?,?)");
    
            $stmts->bind_param( "sssssss", $class_name, $teacher_id,$teacher_name, $std_id, $std_name, $semester,  $des);
            $res = $stmts->execute(); //get result
            $stmts->close();
    
            $user_id = mysqli_insert_id($conn);
            if ($user_id > 0) {
                header('Content-type:Application/json');
                echo json_encode(array("success" => true));
            } else {
                header('Content-type:Application/json');
                echo json_encode(array("success" => false));
            }
        } else {
            
            header('Content-type:Application/json');
        echo json_encode(array("success" => true), array( "error" => "empty post param"));
        }
    }

// Read class
function readclass()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from mclass";
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

// update calss
function updateclass()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete class
function deleteclass()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
