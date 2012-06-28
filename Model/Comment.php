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
	public function getCommentCollectionByOrderId($order_id) 
	{	
		$collection = Mage::getModel('comments/comment')->getCollection();
		$collection->addFilter('order_id', $order_id);
		return $collection;
	}
	
	/**
	 * add new comment
	 * 
	 * @param
	 * int     $order_id
	 * text    $comment
	 * int     $poster_id
	 */
	 public function addComment($order_id, $poster_id, $comment) 
	 {
	 	$comment = Mage::getModel('comments/comment');
		$comment->setOrderId(1);
		$comment->setComment("comment");
		$comment->setPosterId(2);
		$comment->save();
	 }
}

?>