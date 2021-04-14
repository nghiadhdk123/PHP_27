<?php 

		$mod = '';
		$act = '';

		$mod = (isset($_GET['mod'])?$_GET['mod']:'Home');
		$act = (isset($_GET['act'])?$_GET['act']:'Home');

		$controller_class_name = ucfirst($mod) . 'Controller';
		$path = __DIR__ . '/controllers/' . $controller_class_name . '.php';

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

		// switch ($mod) {
		// 	case 'category':
		// 		require_once('controllers/CategoryController.php');
		// 		$controllerr = new CategoryController();
		// 		switch ($act) {
		// 			case 'list':
		// 				$controllerr->list();
		// 				break;
		// 			case 'detail':
		// 				$controllerr->detail();
		// 				break;
		// 			case 'add':
		// 				$controllerr->add();
		// 				break;
		// 			case 'store':
		// 				$data = $_POST;

		// 				$controllerr->store($data);
		// 				break;
		// 			case 'edit':
		// 				$controllerr->edit();
		// 				break;
		// 			case 'update':
		// 				$controllerr->update();
		// 				break;
		// 			case 'delete':
		// 				$controllerr->delete();
		// 			}
		// 		break;
		// 	case 'post':
		// 		require_once('controllers/PostController.php');
		// 		$controller_post = new PostContronller();
		// 		switch ($act) {
		// 			case 'list':
		// 				$controller_post->list();
		// 				break;
		// 			case 'detail':
		// 				$controller_post->detail();
		// 				break;
		// 			case 'add':
		// 				break;
		// 			case 'edit':
		// 				break;
		// 			case 'delete':
		// 				break;
		// 		}
		// 		break;
		// 	case 'user':
		// 	require_once('controllers/UsersController.php');
		// 	$controller_user = new UsersContronller();
		// 		switch ($act) {
		// 			case 'list':
		// 				$controller_user->list();
		// 				break;

		// 			case 'detail':
		// 				$controller_user->detail();
					
		// 			default:
		// 				# code...
		// 				break;
		// 		}
		// 		break;
			
		// 	default:
		// 		echo "Khong ton tai";
		// 		break;
		// }
 ?>