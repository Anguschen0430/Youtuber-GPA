<?php
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root'); // Replace with your database username
// define('DB_PASSWORD', ''); // Replace with your database password
// define('DB_NAME', 'Youtuber'); // Replace with your actual database name
<<<<<<< HEAD
session_start();  //很重要，可以用的變數存在session裡
$username=$_SESSION["username"];
=======
<<<<<<< HEAD
session_start();
$username=$_SESSION["username"];
=======
>>>>>>> c86895e96821394ca5f27e182d0c4e33c0e186a3

>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd
$response = ['success' => false, 'error' => '', 'comment' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['comment'])) {
        $conn = require_once "config.php";

        if ($conn->connect_error) {
            $response['error'] = "Connection failed: " . $conn->connect_error;
        } else {
            $comment = $conn->real_escape_string($_POST['comment']);
<<<<<<< HEAD
            $sql = "INSERT INTO comments (nickname, content) VALUES ('".$username."', '$comment')";
=======
            $sql = "INSERT INTO comments (nickname, content) VALUES ('$username', '$comment')";
>>>>>>> 0e6e47117fbc8580d570da41d019918a6a906afd

            if ($conn->query($sql) === TRUE) {
                $response['success'] = true;
                $response['comment'] = $comment;
            } else {
                $response['error'] = "Error: " . $conn->error;
            }
            $conn->close();
        }
    } else {
        $response['error'] = "Comment cannot be empty";
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
