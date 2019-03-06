<?php
if (isset($_GET["c"])) {
    $c = $_GET["c"];

    switch ($c) {
        case 'c':
            createassignments();
            break;
        case 'r':
            readassignments();
            break;
        case 'u':
            updateassignments();
            break;
        case 'd':
            deleteassignments();
            break;
        default:
            echo "Invalid Choice!";
            # code...
            break;
    }
} else {
    echo "You need to choose the operation";
}

