<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createexams();
            break;
        case 'r':
            readexams();
            break;
        case 'u':
            updateexams();
            break;
        case 'd':
            deleteexams();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new exam
function createexam()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["exam_name"])&& isset($_POST["exam_type"])  && isset($_POST["description"]) && isset($_POST["date"]) )  
     {
            $class_name = $_POST["exam_name"];
            $teacher_id = $_POST["exam_type"];
            $teacher_name = $_POST["description"];
            $std_id = $_POST["date"];


            $stmts = $conn->prepare("INSERT INTO `exams`( `exam_name`, `exam_type`, `description`, `date`)
            VALUES (?,?,?,?)");
        
                $stmts->bind_param( "ssss", $exams_name, $exam_type,$description, $date);
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



        function readexams()
        {
            require_once "dbconfig.php";
        
            if ($conn == null) {
                die("Conn is empty");
            }
        
            $sql = "Select * from exams";
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
        
        // update exams
        function updateexams()
        {
            require_once "dbconfig.php";
        
            if ($conn == null) {
                die("Conn is empty");
            }
        }
        // delete calss
        function deleteexams()
        {
            require_once "dbconfig.php";
        
            if ($conn == null) {
                die("Conn is empty");
            }
        }
        