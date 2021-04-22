<?php 
	require_once('models/Email.php');
	class EmailController
	{
		function store(){

		$data = $_POST;

		$models = new Email();

		$sussecc = $models->create($data);
		if ($sussecc) {
			setcookie('tc','Subcribe Email Sussecc',time()+3);
		}else{
			setcookie('tb','This Email Sussecc not exits',time()+3);
		}
		header('Location: index.php');
		}

		function list()
		{
			$models = new Email();

			$sussecc = $models->all();

			require_once('views/admin/email.php');
		}
	}




 ?>