<?php

class StudentsController extends AppController{

	var $name = 'Students';	

	public function index(){

		$students = $this->Student->find('all');
		$this->set('students', $students);

		
	}

	public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid post'));
	    }

	    $student = $this->Student->findById($id);

	    if (!$student) {
	        throw new NotFoundException(__('Invalid post'));
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

	public function view($stuID = null) {
	    if (!$stuID) {
	        throw new NotFoundException(__('Invalid Student'));
	        return $this->redirect(array('action' => 'index'));
	    }

	    $student = $this->Student->find('all', array('conditions' => array('Student.stuID' => $stuID)));
	    $this->set('student', $student);
	 	
	    
	}




}




?>