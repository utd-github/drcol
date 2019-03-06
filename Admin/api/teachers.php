<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createteacher();
            break;
        case 'r':
            readteacher();
            break;
        case 'u':
            updateteacher();
            break;
        case 'd':
            deleteteacher();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

// Create new teacher
function createteacher()
{
    require_once "dbconfig.php";
    if ($conn == null) {
        die("Conn is empty");
    }

    if (isset($_POST["t_name"]) && isset($_POST["qualification"]) && isset($_POST["email"]) && isset($_POST["phone"]) 
    && isset($_POST["joined_year"])  && isset($_POST["sub_name"]) && isset($_POST["hire_date"]) && isset($_POST["description"]) )   {
            $t_name = $_POST["name"];
            $qualification = $_POST["qualificaion"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $joined_year = $_POST["joined_year"];
            $sub_name = $_POST["sub_name"];
            $hire_date = $_POST["hire_date"];
            $description = $_POST["description"];
           

            $stmts = $conn->prepare("INSERT INTO `teacher`( `t_name`, `qualification`, `phone`, `joined_year`,`sub_name`, `hire_date`, `description`)
        VALUES (?,?,?,?,?,?,?,?,?,?)");
    
            $stmts->bind_param( "ssssssssss", $t_name, $qualification,$email, $phone, $joined_year, $sub_name, $hire_date, $description);
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


    function readteacher()
    {
        require_once "dbconfig.php";
    
        if ($conn == null) {
            die("Conn is empty");
        }
    
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
    
    // update teacher
    function updateteacher()
    {
        require_once "dbconfig.php";
    
        if ($conn == null) {
            die("Conn is empty");
        }
    }
    // delete teacher
    function deleteteacher()
    {
        require_once "dbconfig.php";
    
        if ($conn == null) {
            die("Conn is empty");
        }
    }
    