<?php

class Nathan_Comments_Model_Comment extends Mage_Core_Model_Abstract
{
	protected function _construct()
	{
		$this->_init('comments/comment');
	}
	/**
	 * get all comments with order id $order_id
	 * 
	 * @param
	 * int     $order_id
	 */
	public function getCommentCollectionByOrderId($order_id) {
		{
			$collection = Mage::getModel('comments/comment')->getCollection();
			$collection->addFilter('order_id', $order_id);
			return $collection;
		}
	}
}

?>