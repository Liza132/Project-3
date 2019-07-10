<?php
	session_start();

	if(isset($_POST)) {
		if(!$_SESSION['user_id']) {
			echo json_encode([
		        'result' => false,
		        'message' => 'Ви не зареєстровані'
		    ]);
		    die();
		}
		if(mail('liza@gmail.com', 'Тема листа', $_POST['message'])) {
			echo json_encode([
		        'result' => true,
		        'message' => 'Лист успішно відправлено'
		    ]);
		} else {
			echo json_encode([
				'result' => false,
		        'message' => 'Щось пішло не так'
		    ]);
		}
	}

