<?php

class Nathan_Comments_IndexController extends Mage_Core_Controller_Front_Action
{
	public function testAction() {
		
		$comment = Mage::getModel('comments/comment');
		//$comment->addComment(1, 1, "asdf");
		$comment->getCollection();
		zend_debug::dump($comment->getData());
		foreach($comment as $comment_print)
		{
			echo $comment_print->getComment()."<br />".$comment_print->getOrderId()."<br />";
		}
	}
}

?>