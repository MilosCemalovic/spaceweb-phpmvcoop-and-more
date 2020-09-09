<?php

require_once'../controller/Controller.php';

$controller = new Controller();

$pageGet = isset($_GET['page'])?$_GET['page']:"index";
$pagePost = isset($_POST['page'])?$_POST['page']:"index";

$page = ($pageGet != "index")?$pageGet:$pagePost;

switch ($page) {
	
	case 'showfashion':
		$controller->showfashion();
		break;

		case 'showrafting':
			$controller->showrafting();
		break;

		case 'showpijaca':
			$controller->showpijaca();
		break;

		case 'showspaceweb':
			$controller->showspaceweb();
		break;

		case 'showkafeterija':
			$controller->showkafeterija();
		break;

		case 'contactus':
			$controller->contactus();
		break;

		case 'bookingform':
			$controller->bookingform();
		break;

		case 'showcreatepage':
			$controller->showcreatepage();
		break;

		case 'formcreatepage':
			$controller->formcreatepage();
		break;

		case 'showreadpage':
			$controller->showreadpage();
		break;

		case 'formreadpage':
			$controller->formreadpage();
		break;

		case 'showdeletepage':
			$controller->showdeletepage();
		break;

		case 'delete':
			$controller->delete();
		break;

		case 'showupdatepage':
			$controller->showupdatepage();
		break;

		case 'showupdate':
			$controller->showupdate();
		break;

		case 'update':
			$controller->update();
		break;
	
}


?>