<?php

class Ifi_Comments_Model_Mysql4_Comment_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract 
{
	protected function _construct()
	{
		$this->_init('comments/comment');
	}	
}

?>