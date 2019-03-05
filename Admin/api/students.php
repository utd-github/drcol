<?php
ob_start();

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
function createStudent()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
    $sql = "INSERT INTO `student`( `std_name`, `std_rollno`, `std_phone`, `std_age`, `std_email`, `pob`, `dob`, `gender`, `semester`, `year`, `p_name`, `p_id`, `sub_date`)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $statement = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($statement, "sssssssssssss",
        $std_name,
        $std_rollno,
        $std_phone,
        $std_age,
        $std_email,
        $pob,
        $dob,
        $gender,
        $semester,
        $$year,
        $p_name,
        $p_id,
        $sub_date
    );

    $std_name = $_POST[""];
    $std_rollno = $_POST[""];
    $std_phone = $_POST[""];
    $std_age = $_POST[""];
    $std_email = $_POST[""];
    $pob = $_POST[""];
    $dob = $_POST[""];
    $gender = $_POST[""];
    $semester = $_POST[""];
    $$year = $_POST[""];
    $p_name = $_POST[""];
    $p_id = $_POST[""];
    $sub_date = $_POST[""];

    mysqli_stmt_execute($statement);
    echo 0;
}

// Read from students
function readStudents()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
    $sql = "Select * from student";
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
