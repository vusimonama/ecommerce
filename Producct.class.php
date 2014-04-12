<?php

	class product{
	
		private $id;
		private $name;
		private $category;
		private $price;
		private $description;
		
		public function _constractor($id,$name,$category,$price,$description)
		{
			$this->$id = $id;
			$this->$name= $name;
			$this->$category = $category;
			$this->$price = $price;
			$this->$description= $description;
		}
		function display()
		{
			return $id.''.$name.''.$category.''.$price.''.$description;
		}
		
		function save_to_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$product = Product->save_to_db($db_hostname, $db_username, $db_password, $myDB);
			
			$con = mysql_connect($d, $con);
			$data = mysql_query($myQuery)
			
			$myQuery = "INSERT INTO supplier(id,name,category,price,description)
			                       VALUES('$this->$id','$this->$name','$this->$category','$this->$price','$this->$description')";
			
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