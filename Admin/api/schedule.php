<?php

if (isset($_GET["c"])) {
    $c = $_GET["c"];
    switch ($c) {
        case 'c':
            createStudent();
            break;
        case 'r':
            readStudents();
            break;
        case 'u':
            updateStudent();
            break;
        case 'd':
            deleteStudent();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new Student
function createSchedule()
{

    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "INSERT INTO `class_schedule`(`class_id`, `std_id`, `dayOfweek`, `star_time`, `end_time`)
    VALUES (?,?,?,?,?)";

    $statement = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($statement, "sssss",
        $sub_name,
        $sub_description
    );

    $sub_name = $_POST[""];
    $sub_description = $_POST[""];

    mysqli_stmt_execute($statement);
    echo 0;
}

function readStudents()
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

// update student
function updateStudent()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete student
function deleteStudent()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
