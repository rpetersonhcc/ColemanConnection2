<?php

	class Student extends AppModel{
		
		var $name = 'Student';
		var $primaryKey = 'stuID';
		var $hasAndBelongsToMany = array(
		     'Session' =>
		         array(
		          'className'         => 'Session',
		             'joinTable'             => 'students_sessions',
		             'foreignKey'            => 'student_id'
		         )
		     );
		
	}


?>