<?php

App::uses('AppController', 'Controller');


class ProgramSessionsController extends AppController{
	
	public $heplers = array('Html', 'Form');

	public $components = array('Session');

	public function debug(){
		
		$programSessions = $this->ProgramSession->find('all');		
		
	}


	// Show All Program Sessions
	public function index(){
		
		$programSessions = $this->ProgramSession->find('all', array('order' => 'programName, start_date'));
		$count = count($programSessions);
		$info = array(
			'programSessions' => $programSessions,
			'count' => $count);
		$this->set($info);
		//$this->set('programSessions', $programSessions);
		//$this->set('count', $count);
		
		
	}

	// Add New Program Sessions
	public function add(){

		if($this->request->is('post')){
			
			$this->ProgramSession->create();

			if($this->ProgramSession->save($this->request->data)){
				
				$this->redirect('index');
			
			} else{

				// if the save request does not work.
			
			}

		}		
		
	}

	public function edit($id = null){

		if (!$id) {
		    throw new NotFoundException(__('ID NOT FOUND'));
		}

		if (!($programSession = $this->ProgramSession->findById($id))) {
			throw new NotFoundException(__('PROGRAM SESSION NOT FOUND IN DATABASE'));
		}	

		if($this->request->is(array('post', 'put'))){

			if($this->ProgramSession->save($this->request->data)){
				$this->Session->setFlash(__('THE PROGRAM SESSION HAS BEEN UPDATED'));
				return $this->redirect('index');
			
			} else{

				$this->Session->setFlash(__('UNABLE TO UPDATE PROGRAM SESSION'));
			
			}

		}

		if (!$this->request->data) {
		    $this->request->data = $programSession;
		}
		
	}


	public function delete($id = null){

		$this->ProgramSession->id = $id;

		if (!$id || !($programSession = $this->ProgramSession->exists())) {
		    throw new NotFoundException(__('ID NOT FOUND'));
		}

		if($this->request->is('post')){

			if($this->ProgramSession->delete()){
				$this->Session->setFlash(__('THE PROGRAM SESSION HAS BEEN DELETED'));	
			
			} else{
				$this->Session->setFlash(__('THE PROGRAM SESSION WAS NOT DELETED'));
			}

		}

		$this->redirect('index');
	}



}//END OF PROGRAMSESSIONS CONTROLLER




?>