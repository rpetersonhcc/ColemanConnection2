<?php

	App::uses('AppModel', 'Model');

	class Student extends AppModel{
		
		public $hasOne = array(
			'Role' => array(
				'className' => 'Role',
				'foreignKey' => false,
				'conditions' => array(
					'Student.role = Role.id')));		
		
	}


?>