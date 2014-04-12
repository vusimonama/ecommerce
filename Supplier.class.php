<?php
	class supplier
	{
		private $supp_name_regex = "[a-zA-Z]{1,20}";
		private $email_regex = "^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$";
		
		private $supp_name;
		private $email;
		public function __construct($usupp_name,$email)
		{
			$this->$supp_name = $supp_name;
			$this->$email = $email;
		}
		
		function validate($text_to_validate, $regular_expression)
		{
			if(!preg_macth($regular_expression, $text_to_validate)
			return = "1";
			else
			return = "0";
		}	
		
		function display()
		{
			return $supp_name.''.$email.''.$supp_id;
		}
		
		function save_to_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$supplier = supplier->save_to_db($db_hostname, $db_username, $db_password, $myDB);
			
			$con = mysql_connect($data, $con);
			$data = mysql_query($myQuery)
			
			$myQuery = "INSERT INTO supplier(supp_name,supp_email)
			                       VALUES('$this->$supp_name','$this->$email')";
			
			if($data == 1)
			{
				$data =_num_of_rows($myQuery);
				echo "Succesfully saved supplier information into the database";
				else
				echo "1 supplier, fail to save to the database";
			}
		}   
	}
?>
