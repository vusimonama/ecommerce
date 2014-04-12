<?php
class cart {
    $db_hostname = "localhost";
	$db_username = "root";
	$db_password = "";
			
	$user = User->save_to_db($db_hostname, $db_username, $db_password, $myDB);
    protected $items = array();
	  public function isEmpty() 
		{
         return (empty($this->items));
		}

  public function addItem(Item $item) {
    $id = $item->getId();
    if (!$id){
	 echo 'The cart requires items with unique ID values.';
    }
    if (isset($this->items[$id])) {
        $this->updateItem($item, $this->items[$item]['qty'] + 1);
    } else {
        $this->items[$id] = array('item' => $item, 'qty' => 1);
    }
  } 

  public function updateItem(Item $item, $qty) {
    $id = $item->getId();
    if ($qty === 0) {
        $this->deleteItem($item);
    } elseif ( ($qty > 0) && ($qty != $this->items[$id]['qty'])) {
        $this->items[$id]['qty'] = $qty;
    }
 } 
 public function deleteItem(Item $item) {
    $id = $item->getId();
    if (isset($this->items[$id])) {
            unset($this->items[$id]);
    }
 }

 public function count() {
    return count($this->items);
 }



?>