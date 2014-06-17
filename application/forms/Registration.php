<?php 

class Application_Form_Registration extends Zend_Form
{

	public function init()
	{
		$this->setMethod('post');
		$this->addElement('text', 'name', array(
			'label' => 'Vaše jméno',
			'required' => true
			));
		$this->addElement('text', 'email', array(
			'label' => 'Váš email',
			'required' => true,
			'filters' => array('stringTrim'),
			'validators' => array(
				'emailAddress',
				)
			));
		$this->addElement('submit', 'submit', array(
			'ignore' => true,
			'label' => 'Potvrdit registraci'
			));
		$this->addElement('hash', 'csrf', array(
			'ignore' => true
			));
	}

}