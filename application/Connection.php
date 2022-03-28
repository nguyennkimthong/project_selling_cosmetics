<?php 
	//ket noi csdl
	class Connection{
		//ham ket noi csdl, ket qua tra ve mot bien -> kieu bien nay la bien object
		public static function getInstance(){
			$db = new PDO("mysql:host=localhost;dbname=php58_project_demo","root","091227");
			// $db = new PDO("mysql:host=sql106.byethost31.com;dbname=b31_30789011_php58_project_demo","b31_30789011","0984870647Thongminh");
			//lay du lieu theo kieu unicode
			$db->exec("set names utf8");
			//lay ket qua tra ve theo kieu object
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $db;
		}
	}
 ?>