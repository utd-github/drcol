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

    if (isset($_POST["class_name"])&& isset($_POST["teacher_id"])  && isset($_POST["teacher_name"]) && isset($_POST["std_id"]) && isset($_POST["std_name"]) 
    && isset($_POST["semester"])  && isset($_POST["description"]) )  
     {
            $class_name = $_POST["c_name"];
            $teacher_id = $_POST["teacher_id"];
            $teacher_name = $_POST["t_name"];
            $std_id = $_POST["std_id"];
            $std_name = $_POST["std_name"];
            $semester = $_POST["semester"];
            $description = $_POST["description"];
           

            $stmts = $conn->prepare("INSERT INTO `class`( `class_name`, `teacher_id`, `teacher_name`, `std_id`,`std_name`, `semester `, `description`)
        VALUES (?,?,?,?,?,?,?)");
    
            $stmts->bind_param( "sssssss", $class_name, $teacher_id,$teacher_name, $std_id, $std_name, $semester,  $description);
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

function readclass()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from class";
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
