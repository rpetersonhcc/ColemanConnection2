<?php

class RegisteredSessionsController extends AppController{

	

	public function index(){

		$students = $this->RegisteredSession->find('all');
		$this->set('regSessions', $regSessions);

		
	}	

}




?>