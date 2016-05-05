<?php

	App::uses('AppModel', 'Model');

	class SessionStudent extends AppModel{
		
		public $belongsTo = 'Student';		
		
	}


?>