<?php

class Nathan_Comments_IndexController extends Mage_Core_Controller_Front_Action
{
	public function testAction() {
		$coment = Mage::getModel('comments/comment');
		$coment->load(1);
		var_dump($coment->getData());
	}
}

?>