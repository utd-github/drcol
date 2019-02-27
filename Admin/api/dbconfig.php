<?php

define('url', 'localhost');
define('user', 'root');
define('pass', '');
define('dbname', 'sms');

$conn = mysqli_connect(url, user, pass, dbname) or die("Error " . mysqli_error($conn));
