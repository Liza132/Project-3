<?php
session_start();

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'equalist';

if(isset($_POST)
	&& $_POST['email'] != ''
	&& $_POST['password'] != '') {

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$user_email = $_POST["email"];
	$user_password = md5($_POST["password"]);
	$sql = "SELECT * FROM  `users` WHERE email = '$user_email' AND password='$user_password' LIMIT 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($userinfo = $result->fetch_assoc()) {
	        $_SESSION['user_id'] = $userinfo['id'];
	        $_SESSION['user_name'] = $userinfo['name'];
	    }
	} else {
	    $_SESSION['message'] = 'Ви ввели неправильні дані';
	}
	$conn->close();
	header('Location: /');

} else {
	echo json_encode([
        'result' => false,
        'message' => 'Щось пішло не так',
    ]);
}