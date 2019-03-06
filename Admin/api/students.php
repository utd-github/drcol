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
function createStudent()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["std_name"]) && isset($_POST["std_rollno"]) && isset($_POST["std_phone"]) && isset($_POST["std_age"]) 
    && isset($_POST["std_email"])  && isset($_POST["pob"]) && isset($_POST["dob"]) && isset($_POST["year"]) && isset($_POST["p_name"])  && isset($_POST["p_id"]) && isset($_POST["sub_date"]))   {
            $std_name = $_POST["name"];
            $std_rollno = $_POST["rollno"];
            $std_phone = $_POST["phone"];
            $std_age = $_POST["age"];
            $std_email = $_POST["email"];
            $pob = $_POST["pob"];
            $dob = $_POST["dob"];
            $year = $_POST["year"];
            $p_name = $_POST["p_name"];
            $p_id = $_POST["p_id"];
            $sub_date = $_POST["sub_date"];

            $stmts = $conn->prepare("INSERT INTO `student`( `std_name`, `std_rollno`, `std_phone`, `std_age`,`std_email`, `pob`, `dob`, `gender`, `semester`, `year`, `p_name`, `p_id`, `sub_date`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
            $stmts->bind_param( "sssssssssssss", $std_name, $std_rollno,$std_phone, $std_age, $std_email, $pob, $dob, $gender, $semester, $year, $p_name, $p_id, $sub_date);
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

// Read from students
function readStudents()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }

    $sql = "Select * from Student";
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

// update Students
function updateStudents()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
// delete Students
function deleteStudents()
{
    require_once "dbconfig.php";

    if ($conn == null) {
        die("Conn is empty");
    }
}
