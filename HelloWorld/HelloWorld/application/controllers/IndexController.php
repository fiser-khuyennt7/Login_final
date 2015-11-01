<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$dem = 0;
		
        $form = new Application_Form_Login();
		if($this->_request->isPost()){
            $name=$this->_request->getPost('name');
				if($name == 'admin'){
					$dem = 1;
			}
		}
		
		if($this->_request->isPost()){
			$password=$this->_request->getPost('password');
			if($this->_request->getPost('password') == '123456'){
				$dem = $dem + 1;
			}
				
		}
		if($dem ==2) {
			 echo header('location:Hello.html');
		}
		$this->view->form = $form;	
    }


}
?>

