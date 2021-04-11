<?php 

		$mod = '';
		$act = '';

		$mod = (isset($_GET['mod'])?$_GET['mod']:'Home');
		$act = (isset($_GET['act'])?$_GET['act']:'Home');

		switch ($mod) {
			case 'category':
				require_once('controllers/CategoryController.php');
				$controllerr = new CategoryController();
				switch ($act) {
					case 'list':
						$controllerr->list();
						break;
					case 'detail':
						$controllerr->detail();
						break;
					case 'add':
						require_once('add.php');
						break;
					case 'edit':
						$controllerr->edit();
						break;
					case 'delete':
						$controllerr->delete();
						break;
					}
				break;
			case 'post':
				require_once('controllers/PostController.php');
				$controller_post = new PostContronller();
				switch ($act) {
					case 'list':
						$controller_post->list();
						break;
					case 'detail':
						$controller_post->detail();
						break;
					case 'add':
						break;
					case 'edit':
						break;
					case 'delete':
						break;
				}
				break;
			case 'user':
			require_once('controllers/UsersController.php');
			$controller_user = new UsersContronller();
				switch ($act) {
					case 'list':
						$controller_user->list();
						break;

					case 'detail':
						$controller_user->detail();
					
					default:
						# code...
						break;
				}
				break;
			
			default:
				echo "Khong ton tai";
				break;
		}
 ?>