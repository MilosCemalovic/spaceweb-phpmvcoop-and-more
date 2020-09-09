<?php

require_once'../config/db-1.php';
require_once'../config/db-2.php';
require_once'../config/db-3.php';
require_once'../config/db-4.php';

class DAO{

	private $db1;
	private $db2;
	private $db3;
	private $db4;


	public function __construct() {
		// $this->db1 =DB1::createInstance();
		$this->db2 =DB2::createInstance();
		$this->db3 =DB3::createInstance();
		$this->db4 =DB4::createInstance();
	}

	private $UNOS_KORISNIKA = "INSERT INTO `korisnik`(`ime`, `prezime`, `telefon`) VALUES (?, ?, ?)";

	private $BOOKIG_FORM = "INSERT INTO `bookingform`(`fullname`, `email`, `thegroup`) VALUES (?, ?, ?)";

	private $FORM_CREATE = "INSERT INTO `formcreateinputs`(`fullname`, `email`, `phone`, `skills`, `opinion`, `developer`, `letter`) VALUES (?, ?, ?, ?, ?, ?, ?) ";

	private $GET_FULLNAME = "SELECT * FROM `formcreateinputs` ORDER BY `id` ASC ";

	private $GET_EMAIL = "SELECT * FROM `formcreateinputs` ORDER BY `id` ASC ";

	private $GET_PHONE = "SELECT * FROM `formcreateinputs` ORDER BY `id` ASC ";

	private $GET_LETTER = "SELECT * FROM `formcreateinputs` ORDER BY `id` ASC ";
	
	private $FORM_READ = "INSERT INTO `formreadinputs`(`developer`, `letter`) VALUES (?, ?) ";

	private $DATABASE_READ = "SELECT * FROM formcreateinputs ORDER BY id ASC ";

	private $DELETE_USER = "DELETE FROM formcreateinputs WHERE id=?";

	private $GET_USER = "SELECT * FROM formcreateinputs WHERE id=?";

	private $UPDATE_USER = "UPDATE formcreateinputs SET fullname=?, email=?, phone=? WHERE id=?";



	public function korisnik($ime, $prezime, $telefon) {

		$statement = $this->db3->prepare($this -> UNOS_KORISNIKA);

		$statement -> bindValue(1, $ime);
		$statement -> bindValue(2, $prezime);
		$statement -> bindValue(3, $telefon);

		$statement -> execute();

	}

	public function form($fullname, $email, $thegroup) {

		$statement = $this->db2->prepare($this -> BOOKIG_FORM);

		$statement->bindValue(1, $fullname);
		$statement->bindValue(2, $email);
		$statement->bindValue(3, $thegroup);

		$statement->execute();
	}

	public function formcreateinputs($fullname, $email, $phone, $skills, $opinion, $developer, $letter)	{
		
		$statement = $this->db4->prepare($this -> FORM_CREATE);

		$statement->bindValue(1, $fullname);
		$statement->bindValue(2, $email);
		$statement->bindValue(3, $phone);
		$statement->bindValue(4, $skills);
		$statement->bindValue(5, $opinion);
		$statement->bindValue(6, $developer);
		$statement->bindValue(7, $letter);

		$statement->execute();
	}

	public function getfullname()	{
		
		$statement = $this->db4->prepare($this -> GET_FULLNAME);

		$statement->execute();

		$result = $statement->fetchAll();

		return $result;

	}

	public function getemail()	{
		
		$statement = $this->db4->prepare($this -> GET_EMAIL);

		$statement->execute();

		$result = $statement->fetchAll();

		return $result;

	}

	public function getphone()	{
		
		$statement = $this->db4->prepare($this -> GET_PHONE);

		$statement->execute();

		$result = $statement->fetchAll();

		return $result;

	}

	public function getletter()	{
		
		$statement = $this->db4->prepare($this -> GET_LETTER);

		$statement->execute();

		$result = $statement->fetchAll();

		return $result;

	}

	public function formreadinputs($developer, $letter) {
		
		$statement = $this->db4->prepare($this -> FORM_READ);

		$statement->bindValue(1, $developer);
		$statement->bindValue(2, $letter);

		$statement->execute();
	}

	public function getAllData() {
		
		$statement = $this->db4->prepare($this -> DATABASE_READ);

		$statement->execute();

		$result = $statement->fetchAll();

		return $result;
		
	}

	public function deleteuser($id) {
		
		$statement = $this->db4->prepare($this -> DELETE_USER);

		$statement->bindValue(1, $id);

		$statement->execute();
	}

	public function getuser($idTable)	{
		
		$statement = $this->db4->prepare($this -> GET_USER);

		$statement->bindValue(1, $idTable);

		$statement->execute();

		$result = $statement->fetch();

		return $result;
	}

	public function updateuser($fullname, $email, $phone, $id) {
		
		$statement = $this->db4->prepare($this -> UPDATE_USER);

		$statement->bindValue(1, $fullname);
		$statement->bindValue(2, $email);
		$statement->bindValue(3, $phone);
		$statement->bindValue(4, $id);

		$statement->execute();
	}



}

?>