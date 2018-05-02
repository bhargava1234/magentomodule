<?php
class Customer_Feedback_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout(); 
        $this->renderLayout();
    }
	
	 public function getAction()
    {
    
	   $productModel = Mage::getModel('feedback/feedback');  
	   $product = $productModel->load(1);
		echo $description = $product->getData('name');
		die;
    }
	
	public function createPersonAction()
	{
		$data = $this->getRequest()->getPost();
		
		//echo "<pre>"; print_r($data); die;
		
		//$session = Mage::getSingleton('core/session');
		$person = Mage::getModel('feedback/feedback');
		$person->setData('name', $data['name']);
		$person->setData('birthday', $data['birthday']);
		$person->setData('gender', $data['gender']);
		$person->setData('address', $data['address']);
		$person->save();
		$this->_redirect('feedback/index/index');
	}
	
}