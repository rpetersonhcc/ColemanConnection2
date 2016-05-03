<!-- File: /app/View/Students/index.ctp -->

<table>
	<head>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</head>
	<tbody>
		<?php foreach($students as $student): ?>
		<tr>
			<td><?php echo $student['Student']['firstname']; ?></td>
			<td><?php echo $student['Student']['lastname']; ?></td>
			<td><?php echo $student['Student']['email']; ?></td>
			<td>
			<?php echo $this->Html->link('Edit', array('action'=>'edit',$student['Student']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link('View', array('action'=>'view',$student['Student']['stuID']), array('class'=>'btn')); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>