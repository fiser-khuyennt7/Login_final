<?php
class Application_Form_Login extends Zend_Form{
    public function init(){
		$this->setAction('')->setMethod('post');
          $name=$this->createElement("text","name",array(
                                "label" => "UserName",
                                "size" => "30", 
    ));
         $password=$this->createElement("password","password",array(
			"label" => "Password",
			"size" => "30",
		 ));
           $submit=$this->createElement("submit","Login");        
      $this->addElements(
                array($name,$password,$submit)
            );
    }
}