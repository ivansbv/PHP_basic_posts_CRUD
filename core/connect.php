<?php

class Connect{

	private static $host	 = "localhost";
	private static $dbname 	 = "post";
	private static $username = "root";
	private static $password = "";

	private static $conn = null;

	public static function getConnection(){

		if(!self::$conn){

			try{
				self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8",self::$username,self::$password);
			}
			catch(PDOException $e){

				die($e->getMessage());
			}
		}
		return self::$conn;
	}
}