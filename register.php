<?php

$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'equalist';

if(isset($_POST) 
	&& $_POST['name'] != ''
	&& $_POST['email'] != ''
	&& $_POST['password'] != ''
) {
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
		$user_name = $_POST["name"];
		$user_email = $_POST["email"];
		$user_password = md5($_POST["password"]);
		$sql = "INSERT INTO `users` (name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";

	if ($conn->query($sql) === TRUE) {
	    echo json_encode([
	        'result' => true,
	        'message' => 'Ви успішно зареєстровані',
	    ]);	
	} else {
	    echo json_encode([
	        'result' => false,
	        'message' => 'Щось пішло не так',
	    ]);	
	}

	$conn->close();

} else {
	echo json_encode([
        'result' => false,
        'message' => 'Щось пішло не так',
    ]);	
    die();
}