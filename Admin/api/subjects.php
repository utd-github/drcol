<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createSubjects();
            break;
        case 'r':
            readSubjects();
            break;
        case 'u':
            updateSubjects();
            break;
        case 'd':
            deleteSubjects();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new Subjects
function createSubjects()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["name"]) && isset($_POST["des"])) {
        $sub_name = $_POST["name"];
        $sub_description = $_POST["des"];

        $stmts = $conn->prepare("INSERT INTO `subjects`( `sub_name`, `sub_description`)
                    VALUES (?,?)");

        $stmts->bind_param("ss", $sub_name, $sub_description);
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

function readSubjects()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from subjects";
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

// update Subjects
function updateSubjects()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete Subjects
function deleteSubjects()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
