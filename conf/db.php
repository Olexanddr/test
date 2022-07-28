<?php
	class DB{
		/*
		const USER = "sanya25";
		const PASSWORD = "Qwerty123";
		const HOST = "localhost";
		const DB = "sanya25";
		*/	
		const USER = "b962b824a8327d";
		const PASSWORD = "657cc1ef46e58ae";
		const HOST = "eu-cdbr-west-03.cleardb.net";
		const DB = "heroku_dc0e8d8db09d6e3";
		
		/*$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
			PDO::MYSQL_ATTR_SSL_CA => 'cleardb-ca.pem',
			PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,
		);*/
		public static function connToDB(){

			$user = self::USER;
			$pass = self::PASSWORD;
			$host = self::HOST;
			$db = self::DB;
			$conn = new PDO("mysql:dbname=$db;host=$host;", $user, $pass);
			return $conn;
		}
	}
?>