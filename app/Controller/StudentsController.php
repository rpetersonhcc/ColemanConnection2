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

		$this->loadModel('Session');

	    if (!$stuID) {
	        throw new NotFoundException(__('Invalid Student'));
	        return $this->redirect(array('action' => 'index'));
	    }

	    $student = $this->Student->find('all', array('conditions' => array('Student.stuID' => $stuID)));
	    $this->set('student', $student);

	    $sessions = $this->Session->find('all');
	    $this->set('sessions', $sessions);
	    
	 	
	    
	}


	public function delete_session($id, $student_id) {


		// load sessions model
		$this->loadModel('StudentSession');

		
		// check if is a get request
	    if ($this->request->is('get')) {
	            throw new MethodNotAllowedException();
	        }
	    // remove session
	    if ($this->StudentSession->delete($id)) {
	            $this->Session->setFlash('The Registered Session has been removed!');
	        } else {
	            $this->Session->setFlash('The Registered Session was not removed!');
	        }
	    // return to students page
	    return $this->redirect(array('action' => 'view', $student_id));	    

	}
	

}




?>