<div class="row">
	<h1>
		Welcome, <?php echo $student[0]['Student']['firstname']; ?> <?php echo $student[0]['Student']['lastname']; ?>
	</h1>
</div>
<div class="row">
	<h1>Registered Programs</h1>
	<?php $i=0; foreach($student[0]['Session'] as $registeredSessions): ?>
	<p>
		Start Date: <?php echo date('F m Y g:i A', strtotime($registeredSessions['start_date'])); ?>
		<br />
		Program Name: <?php echo $registeredSessions['programName']; ?>
		<br />
		<?php echo $this->Form->postLink('Remove', array('action' => 'delete_session', $registeredSessions['StudentsSession']['id'], $registeredSessions['StudentsSession']['student_id']), array('confirm' => 'Are you sure?')); ?>  
	</p>
	<?php $i++; endforeach;?>
</div>


