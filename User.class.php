<?php
	class User
	{
		private $username_regex = "[a-zA-Z]{1,20}";
		private $email_regex = "^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$";
		private $password_regex = "";
		private $cellnumber_regex = array ("072","071","074","078","079","076","073","082","084","083");
		
		private $username;
		private $email;
		private $password;
		private $address
		private $cellnumber;
		private $paymentType;
		
		public function __construct($username,  $email, $password,$address,$cellnumber,$paymentType)
		{
			$this->$username = $username;
			$this->$email = $email;
			$this->$password = $password;
			$this->$address = $address;
			$this->$cellnumber = $cellnumber;
			this->$paymentType = $paymentType;
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
			return $username.''.$password.''.$address.''.$email.''.$cellnumber.''.$paymentType;
		}
		
		function save_to_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$user = User->save_to_db($db_hostname, $db_username, $db_password, $myDB);
			
			$con = mysql_connect($d, $con);
			$data = mysql_query($myQuery)
			
			$myQuery = "INSERT INTO user(username, password,address,email,cellnumber, payType)
			                       VALUES('$this->$username','$this->$password','$this->$address','$this->$email','$this->$cellnumber','$this->$paymentType')";
			
			if($data == 1)
			{
				$data =_num_of_rows($myQuery);
				echo "Succesfully saved user information into the database";
				else
				echo "1 user, fail to save to the database";
			}
			
		}
	}
?>
