<?php

	class Shipping{
	
		private $id;
		private $date;
		private $address;
		
		public function _consttruct($id,$date,$address)
		{
			$this->$id= $id;
			$this->$date = $date;
			$this->$address= $address;
		
		}
		function display()
		{
			return $id.''.$date.''.$address.;
		}
				function save_to_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$shipping = Shipping->save_to_db($db_hostname, $db_username, $db_password, $myDB);
			
			$con = mysql_connect($data, $con);
			$data = mysql_query($myQuery)
			
			$myQuery = "INSERT INTO shipping(id,name,category,price,description)
			                       VALUES('$this->$id','$this->$date','$this->$address')";
			
			if($data == 1)
			{
				$data =_num_of_rows($myQuery);
				echo "Succesfully saved product information into the database";
				else
				echo "product, fail to save to the database";
			}
		}   


	}
	



?>