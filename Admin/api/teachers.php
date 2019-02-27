<?php
include "dbconfig.php";

if (isset($_GET["c"])) {
    switch ($choice) {
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
function createSubjects()
{

    $sql = "INSERT INTO `teacher`( `t_name`, `qualification`, `email`,`phone`,`joined_year	`,`sub_name`,`hire_date`, 'description', )
    VALUES (?,?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($statement, "ssssssss",
    $t_name	,
    $qualification,
    $email	,
    $phone	,
    $joined_year,	
    $sub_name	,
    $hire_date	,
    $description
    );

    $t_name	= $_POST[""];
    $qualification= $_POST[""];
    $email	= $_POST[""];
    $phone	= $_POST[""];
    $joined_year = $_POST[""];	
    $sub_name = $_POST[""];	
    $hire_date = $_POST[""];	
    $description = $_POST[""];
   

    mysqli_stmt_execute($statement);
    echo 0;
}

function readStudents()
{
    $sql = "Select * from teacher";
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
{}
// delete student
function deleteStudent()
{}
