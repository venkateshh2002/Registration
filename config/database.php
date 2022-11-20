 <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'venkateshh');
    define('DB_PASS', '123456');
    define('DB_NAME', 'users');
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //create connection
    //check connectin
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }
    ?>