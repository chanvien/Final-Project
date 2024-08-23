<?php

session_start();

class Database {
	private $DBserver;
	private $DBuser;
	private $DBpass;
	private $Database;
	public 	$Conn;

	function __construct(){
		$this->dbconnect();
	}

	function dbconnect(){
		$this->DBserver = "sql110.infinityfree.com";
		$this->DBuser   = "if0_37109502";
		$this->DBpass   = "aC8yaUvZ0L";
		$this->Database = "if0_37109502_final";

		$this->Conn = new mysqli($this->DBserver, $this->DBuser, $this->DBpass, $this->Database);
		return $this->Conn;
	}
}

?>