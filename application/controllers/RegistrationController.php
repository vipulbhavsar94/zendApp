<?php 

class RegistrationController extends Zend_Controller_Action
{

	public function init()
	{

	}

	public function indexAction()
	{
		$request = $this->getRequest();
		$form = new Application_Form_Registration();

		if ($this->getRequest()->isPost()) {
			if ($form->isValid($request->getPost())) {
				return $this->_helper->redirector('success');
			}
		}

		$this->view->form = $form;
	}

	public function successAction()
	{
		$this->view->msg = 'Registrace proběhla úspěšně.';
	}

}