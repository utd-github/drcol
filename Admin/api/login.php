<?php

require_once "dbconfig.php";

if ($conn == null) {
    die("Conn is empty");
}
define('id', 'id');
define('name', 'name');
define('sem', 'sem');
$Email = $_GET["Email"];
$Pass = $_GET["Password"];

$statement = mysqli_prepare($conn, "SELECT name FROM adminlogin WHERE email = ? AND pass = ? ");

mysqli_stmt_bind_param($statement, "ss", $Email, $Pass);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $id, $name, $sem);

$user = array();

while (mysqli_stmt_fetch($statement)) {
    $user[id] = $id;
    $user[name] = $name;
    $user[sem] = $sem;
}
if (sizeof($user) > 0) {
    echo json_encode($user);
} else {
    echo 1;
}
mysqli_stmt_close($statement);
mysqli_close($conn);
