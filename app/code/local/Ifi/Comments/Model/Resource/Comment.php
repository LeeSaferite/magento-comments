<?php

class Ifi_Comments_Model_Resource_Comment extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('comments/comment', 'comment_id');
    }
}
