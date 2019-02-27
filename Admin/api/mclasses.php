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

    $sql = "INSERT INTO `class`( `class_name`, `teacher_id`, `teacher_name`, `std_id`, `std_name`, `semester`, `description`)
    VALUES (?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($statement, "sssssss",
    $class_name	,
    $teacher_id,
    $teacher_name	,
    $std_id	,
    $std_name,
    $semester ,
    $description 
    );

    $class_name	= $_POST[""];
    $teacher_id= $_POST[""];
    $teacher_name	= $_POST[""];
    $std_id	= $_POST[""];
    $std_name = $_POST[""];	
    $semester = $_POST[""];	
    $description = $_POST[""];	
   

    mysqli_stmt_execute($statement);
    echo 0;
}

function readStudents()
{
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

// update student
function updateStudent()
{}
// delete student
function deleteStudent()
{}
