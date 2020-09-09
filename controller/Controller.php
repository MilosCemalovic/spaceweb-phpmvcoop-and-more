<?php

require_once'../model/DAO.php';

class Controller{

	public function showfashion() {
		include 'index.php';
	}

	public function showrafting() {
		include 'rafting.php';
	}

	public function showpijaca() {
		include 'pijaca.php';
	}

	public function showspaceweb() {
		include 'spaceweb.php';
	}

	public function showkafeterija() {
		include 'kafeterija.php';
	}

	public function showcreatepage() {
		include 'spaceweb-create-page.php';
	}

	public function showreadpage() {

		$dao = new DAO();
		$readfullname = $dao->getfullname();
		$reademail = $dao->getemail();
		$readphone = $dao->getphone();
		// $dao->getskills();
		// $dao->getopinion();
		// $dao->getdeveloper();
		$readletter = $dao->getletter();

		$readalldata = $dao->getAllData();

		include 'spaceweb-read-page.php';
	}

	public function showupdatepage() {

		$dao = new DAO();
		$readfullname = $dao->getfullname();
		$reademail = $dao->getemail();
		$readphone = $dao->getphone();
		$readletter = $dao->getletter();

		$readalldata = $dao->getAllData();

		
		include 'spaceweb-update-page.php';
	}

	public function showdeletepage() {
		
		$dao = new DAO();
		$readfullname = $dao->getfullname();
		$reademail = $dao->getemail();
		$readphone = $dao->getphone();
		$readletter = $dao->getletter();

		$readalldata = $dao->getAllData();

		include 'spaceweb-delete-page.php';
	}

	public function contactus() {

		$ime = isset($_POST['firstname'])?$_POST['firstname']:"";
		$prezime = isset($_POST['lastname'])?$_POST['lastname']:"";
		$telefon = isset($_POST['telephone'])?$_POST['telephone']:"";

		$errors = [];

		if (empty($ime)) {
			$errors['firstname'] = "Please enter your name";
		}

		if (empty($prezime)) {
			$errors['lastname'] = "Please enter your lastname";
		}

		if (empty($telefon)) {
			$errors['telephone'] = "Please enter your telephone";
		} else {
			if (preg_match('/^[0-9 +_-]*$/', $telefon)) {
				
			} else {
				$errors['telephone'] = "Please enter a number";
			}
			
		}

		if (count($errors) == 0) {

			$dao = new DAO();

			$podacikorisnika = $dao->korisnik($ime, $prezime, $telefon);

			$msg = "Sucsses!";
			// $_SESSION['errors'] = $errors;
			// header('Location: pijaca.php');
			// redirect(base_url('pijaca.php'));
			include 'pijaca.php';
			
		} else {
			$msg = "Please enter all fileds";
			// $_SESSION['errors'] = $errors;
			// header('Location: pijaca.php');
			// redirect('pijaca.php');
			include 'pijaca.php';
		}

	}

	public function bookingform()	{
		
		$fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
		$email = isset($_POST['email'])?$_POST['email']:"";
		$thegroup = isset($_POST['group'])?$_POST['group']:"";

		$errors = [];

		if (empty($fullname)) {
			$errors['fullname'] = "Please enter your first name";
		}

		if(empty($email)){

			$errors['email']="Please enter your email";

		}else{

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						
			} else {
				$errors['email']="Email is not properly entered";
			}
		}

		if (empty($thegroup)) {
			$errors['group'] = "Please enter desired group";
		}

		if (count($errors) == 0) {
			
			$dao = new DAO();

			$dao->form($fullname, $email, $thegroup);

			$msg = "Enjoy your trip!";
			include 'rafting.php';

		} else {
			$msg = "Please enter all fields";
			include 'rafting.php';
		}
		

	}

	public function formcreatepage() {

		$fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
		$email = isset($_POST['email'])?$_POST['email']:"";
		$phone = isset($_POST['phone'])?$_POST['phone']:"";

		$skills = implode(" ", isset($_POST['skills'])?$_POST['skills']:[]);

		$opinion = isset($_POST['opinion'])?$_POST['opinion']:"";
		$developer = isset($_POST['developer'])?$_POST['developer']:"";

		$letter = isset($_POST['letter'])?$_POST['letter']:"";

		$errors = [];

		if (empty($fullname)) {
			$errors['fullname'] = "Please enter your first name";
		}

		if(empty($email)){

			$errors['email']="Please enter your email";

		}else{

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						
			} else {
				$errors['email']="Email is not properly entered";
			}
		}

		if (empty($phone)) {
			$errors['phone'] = "Please enter your phone";
		} else {

			if (preg_match('/^[0-9 +_-]*$/', $phone)) {
				
			} else {
				$errors['phone'] = "Phone is not properly entered";
			}
			
		}

		if (empty($skills)) {
			$errors['skills'] = "Please check some skills";
		}



		if ($opinion == "My honest opinion is") {
			$errors['opinion'] = "Please check your opinion";
		}



		if (empty($developer)) {
			$errors['developer'] = "Please answer the question";
		}

		if (empty($letter)) {
			$errors['letter'] = "Please enter a short message. Not longer than 250 characters";
		} else {
			if (strlen($letter) > 250) {
				$errors['letter'] = "Maximum characters is 250. Please enter a short message.";
			}
		}


		if (count($errors)==0) {
			
			$dao = new DAO();

			$dao->formcreateinputs($fullname, $email, $phone, $skills, $opinion, $developer, $letter);

			$msg = "Thank you for your time!";
			include 'spaceweb-create-page.php';			

		} else {
			$msg = "Please enter all fields!";
			include 'spaceweb-create-page.php';
		}
		
	}

	public function formreadpage() {
		
		$developer = isset($_POST['developer'])?$_POST['developer']:"";

		$letter = isset($_POST['letter'])?$_POST['letter']:"";

		$errors = [];


		if (empty($developer)) {
			$errors['developer'] = "Please answer the question";
		}

		if (empty($letter)) {
			$errors['letter'] = "Please enter a short message. Not longer than 250 characters";
		} else {
			if (strlen($letter) > 250) {
				$errors['letter'] = "Maximum characters is 250. Please enter a short message.";
			}
		}


		if (count($errors)==0) {
			
			$dao = new DAO();

			$dao->formreadinputs($developer, $letter);

			$msg = "Thank you for your time!";
			include 'spaceweb-read-page.php';			

		} else {
			
			$msg = "Please enter all fields!";
			include 'spaceweb-read-page.php';
		}
		
	}

	public function showupdate() {

		$idTable = isset($_GET['id'])?$_GET['id']:"";
			
		$dao = new DAO();
		
		$user = $dao->getuser($idTable);

		$readalldata = $dao->getAllData();

		include 'spaceweb-update-user-page.php';
		
	}

	public function update() {
		
		$fullname = isset($_POST['fullname'])?$_POST['fullname']:"";
		$email = isset($_POST['email'])?$_POST['email']:"";
		$phone = isset($_POST['phone'])?$_POST['phone']:"";
		$id = isset($_POST['id'])?$_POST['id']:"";

		$errors = [];

		if (empty($fullname)) {
			$errors['fullname'] = "Please enter your first name";
		}

		if(empty($email)){

			$errors['email']="Please enter your email";

		}else{

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						
			} else {
				$errors['email']="Email is not properly entered";
			}
		}

		if (empty($phone)) {
			$errors['phone'] = "Please enter your phone";
		} else {

			if (preg_match('/^[0-9 +_-]*$/', $phone)) {
				
			} else {
				$errors['phone'] = "Phone is not properly entered";
			}
			
		}

		if (count($errors)==0) {

			$dao = new DAO();

			$dao->updateuser($fullname, $email, $phone, $id);

			$readalldata = $dao->getAllData();

			$idupdated = isset($_POST['id'])?$_POST['id']:"";

			$msg = "Update successful!";
			include 'spaceweb-update-page.php';

		} else {

			$msg = "Please enter all filds";
			include 'spaceweb-update-user-page.php';
		}
		
	}

	public function delete() {

		$id = isset($_GET['id'])?$_GET['id']:"";

		if(!empty($id)) {

			$dao = new DAO();

			$dao->deleteuser($id);
			$readalldata = $dao->getAllData();
		}

		include 'spaceweb-delete-page.php';
	}





}

?>