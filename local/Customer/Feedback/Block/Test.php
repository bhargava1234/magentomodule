<?php
class Customer_Feedback_Block_Test extends Mage_Core_Block_Template
{
  public function getActionOfForm()
	{
	return $this->getUrl('feedback/index/createPerson');
	}
}