<?php

App::uses('AppController', 'Controller');	


class StudentsController extends AppController{


	public $heplers = array('Html', 'Form');

	public $components = array('Session', 'Paginator');

	public $paginate = array(
	'limit' => 10
	);


	public function index(){

		
		$this->set('students', $this->paginate());
		//debug($this->Student->find('all'));exit();
		
	}

	
	public function edit($id = null) {
		
	    if (!$id) {
	        throw new NotFoundException(__('ID NOT FOUND'));
	    }	    

	    if (!($student = $this->Student->findById($id))) {
	    	throw new NotFoundException(__('STUDENT NOT FOUND IN DATABASE'));
	    }

	    if ($this->request->is(array('post', 'put'))) {

	        $this->Student->id = $id;
	        if ($this->Student->save($this->request->data)) {
	            $this->Flash->success(__('Student has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Flash->error(__('Unable to update your student.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $student;
	    }
	}

	
	public function view($id = null) {	
		if(!$id){
			throw new NotFoundException(__('ID NOT FOUND'));
		}
	    if (!($student = $this->Student->findById($id))) {
	    	throw new NotFoundException(__('STUDENT NOT FOUND IN DATABASE'));
	    }
	    $this->set('student', $this->Student->findById($id));
	    //debug($student);exit();
	}
	

}




?>