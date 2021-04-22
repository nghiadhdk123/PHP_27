<?php 
		 session_start();
		//session_destroy();

		$mod = '';
		$act = '';
		$admin = '';

		$mod = (isset($_GET['mod'])?$_GET['mod']:'Home');
		$admin = (isset($_GET['admin'])?$_GET['admin']:'client');
		$act = (isset($_GET['act'])?$_GET['act']:'index');

		$controller_class_name = ucfirst($mod) . 'Controller';
		$path = __DIR__ . '/controllers/' . $admin . '/' . $controller_class_name . '.php';

		if (!file_exists($path)){
		    echo "File $path khong ton tai";
		    exit();
		}
		require($path);
		$controller_obj = new $controller_class_name();
		if (!method_exists($controller_obj, $act)){
		    echo "Method $act khong ton tai";
		    exit();
		}
		$controller_obj->$act();
 ?>