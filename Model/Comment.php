<?php

class Nathan_Comments_Model_Comment extends Mage_Core_Model_Abstract
{
	protected function _construct()
	{
		$this->_init('comments/comment');
	}
	
	public function getCommentCollection($order_id) {
		$comment = Mage::getModel('comments/comment')->getCollection()->addFilter('order_id', $order_id);
		foreach($comment as $$comment_post) 
		{
			echo $comment_post->getComment()."<br />";
			echo $comment_post->getTimestamp()."<br />";
			echo $comment_post->getPosterid()."<br />";
		}
	}
}

?>