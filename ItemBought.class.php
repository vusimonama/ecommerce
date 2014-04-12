<?php
	class itemBought
	{
		private $prod_name = "[a-zA-Z]{1,20}";
		private $prod_num;
		private $prod_price;
		private $totPrice;
		
		public function __construct($prod_name,$prod_num,$prod_price,$totPrice)
		{
			$this->$prod_name = $prod_name;;
			$this->$prod_num = $prod_num;
			$this->$prod_price = $prod_price;
			$this->$totPrice = $totPrice;
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
			return $prod_name.''.$prod_num.''.$prod_price.''.$totPrice;
		}
		
		function fetch_from_db($db_hostname, $db_username, $db_password, $myDB)
		{
			$db_hostname = "localhost";
			$db_username = "root";
			$db_password = "";
			
			$items = Items->save_to_db($db_hostname, $db_username, $db_password, $ourDB);
			
			$con = mysql_connect($d, $con);
			$data = mysql_query($myQuery)
			
			$myQuery = ("SELECT * FROM itemBought 
			            WHERE  prod_name ='".$_POST['name']."',prod_num ='".$_POST['number']"',prod_price ='".$_POST['price']"',totPrice ='".$_POST['tot']."'")or die(mysql_error());
			                 
			if($data == 1)
			{
				$data =_num_of_rows($myQuery);
				echo "";
				else
				echo "No items bought available to display";
			}
			
		}
	}
?>
