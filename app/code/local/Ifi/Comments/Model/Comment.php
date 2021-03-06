<?php

class Ifi_Comments_Model_Comment extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('comments/comment');
    }

    /**
     * get all comments with order id $order_id
     *
     * @param int $order_id
     *
     * @return Ifi_Comments_Model_Resource_Comment_Collection
     */
    public function getByOrderId($order_id)
    {
        $collection = Mage::getModel('comments/comment')->getCollection();
        $collection->addFilter('order_id', $order_id);
        return $collection;
    }

    /**
     * add new comment
     *
     * @param int     $order_id
     * @param int     $poster_id
     * @param text    $comment_text
     */
    public function addComment($order_id, $poster_id, $comment_text)
    {
        $comment = Mage::getModel('comments/comment');
        $comment->setOrderId($order_id);
        $comment->setComment($comment_text);
        $comment->setPosterId($poster_id);
        $comment->save();
    }
}
