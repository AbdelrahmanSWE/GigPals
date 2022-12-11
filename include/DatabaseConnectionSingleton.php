<?php

class Singleton {

	private static  $uniqueinstance = null;


	private function __construct()
	{}

		public static function getinstance()
		{
			if(@self::$uniqueinstance == null)
			{
				require 'connection.php';
				self::$uniqueinstance =  new mysqli($host, $dbusername, $dbpassword, $dbname);
			}
			return self::$uniqueinstance;
		}

	}
	















?>
