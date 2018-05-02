<?php

class Customer_Feedback_Model_Mysql4_Feedback extends Mage_Core_Model_Mysql4_Abstract
{
	public function _construct()
	{
	$this->_init('feedback/feedback','feedback_id');
	}
}