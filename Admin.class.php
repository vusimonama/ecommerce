<?php
	class admin
	{
		private $Admin_name_regex = "[a-zA-Z]{1,20}";
		private $password_regex = "[a-zA-Z]{1,20}";
		private $cellnumber_regex = array ("072","071","074","078","079","076","073","082","084","083");
		
		private $admin_name;
		private $password;
		private $cellnumber;
		
		public function __construct($username,$password,$cellnumber)
		{
			$this->$admin_name = $admin_name;
			$this->$password = $password;
			$this->$cellnumber = $cellnumber;
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
			return $admin_name.''.$password.''.$cellnumber;
		}
		
		function save_to_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$admin = Admin->save_to_db($db_hostname, $db_username, $db_password, $myDB);
			
			$con = mysql_connect($d, $con);
			$data = mysql_query($myQuery)
			
			 $check = mysql_query("SELECT * FROM admin WHERE admin_name ='".$_POST['adminname']."'") or die(mysql_error());
			 $check2 = mysql_num_rows($check);

            if($check2 == 0)
            {
                $error_msg  .=   '<br />Admin not registerd on the system';
            }

            while ($row1 = mysql_fetch_array($check)) {

                $_POST['password']           = stripslashes($_POST['password']);
                $row1['user_password']   = stripslashes($row1['user_password']);

                if($_POST['password'] != $row1['user_password']){

                    $error_msg  .=   '<br />Wrong password, please try again';
                }else {

                    $_POST['username'] = stripslashes($_POST['username']);
                    $hour = time() + 36000;
                    setcookie('ID_my_site', $_POST['username'], $hour);
                    setcookie('Key_my_site', $_POST['password'], $hour);
			
		   }
		   }
		   }
	}
?>
