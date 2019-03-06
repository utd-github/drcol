<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createAssignments();
            break;
        case 'r':
            readAssignments();
            break;
        case 'u':
            updateAssignments();
            break;
        case 'd':
            deleteAssignments();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new Assignments
function createAssignments()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["class_id"]) && isset($_POST["sub_id"]) && isset($_POST["teacher_id"]) && isset($_POST["assign_title"]) && isset($_POST["assign_file"])
        && isset($_POST["assign_description"]) && isset($_POST["assign_deadline"])) {
        $class_id = $_POST["class_id"];
        $sub_id = $_POST["sub_id"];
        $teacher_id = $_POST["teacher_id"];
        $assign_title = $_POST["assign_title"];
        $assign_file = $_POST["assign_file"];
        $assign_description = $_POST["assign_description"];
        $assign_deadline = $_POST["assign_deadline"];

        $stmts = $conn->prepare("INSERT INTO `assignments`( `class_id`, `sub_id`, `teacher_id`, `assign_title`,`assign_file`,`assign_description`,`assign_deadline`)
           VALUES (?,?,?,?,?,?,?)");

        $stmts->bind_param("sssssss", $class_id, $sub_id, $teacher_id, $assign_title, $assign_file, $assign_description, $assign_daedline);
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

function readAssignments()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from assignments";
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

// update Assignments
function updateAssignments()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete Assignments
function deleteAssignments()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
