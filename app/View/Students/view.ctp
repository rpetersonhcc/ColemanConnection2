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
	
</div>


<div class="row">
	<h1>Available Sessions</h1>
	<table>
		<head>
			<tr>
				<th>Date</th>
				<th>Time</th>
				<th>Capacity</th>
				<th>Register</th>
			</tr>
		</head>
		<tbody>
			<?php foreach($sessions as $session): ?>
			<tr>
				<td><?php echo date('F d Y', strtotime($session['Session']['start_date']));?></td>
				<td><?php echo date('g:i A', strtotime($session['Session']['start_date']));?></td>
				<td>50</td>
				<td>
				<?php echo $this->Form->postLink('Register', array('action'=>'register_session',$registeredSessions['StudentsSession']['student_id']), array('class'=>'btn')); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>		
	</table>
		<?php $i++; endforeach;?>	
</div>