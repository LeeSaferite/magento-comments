<?php

class Nathan_Comments_IndexController extends Mage_Core_Controller_Front_Action
{
	public function testAction() {
		
		foreach(Mage::getModel('comments/comment')->getByOrderId(1) as $comment_print)
		{
			echo $comment_print->getComment()."<br />".$comment_print->getOrderId()."<br />";
		}
		Mage::getModel('comments/comment')->addComment(1, 1, "a comment would like to worl");
	}
}

?>