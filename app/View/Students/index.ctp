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
			<?php echo $this->Html->link('Edit', array('action'=>'edit',$student['Student']['id'])); ?>
			<?php echo $this->Html->link('View', array('action'=>'view',$student['Student']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>

	</tbody>
</table>
<div>
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}..... {:count}
total records'))); ?>
</div>
<div class="Actions">
<?php
	echo $this->Paginator->prev(__('< previous '), array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ' '));
	echo $this->Paginator->next(__(' next >'), array(), null, array('class' => 'next disabled'));
?>
</div>
<div class="actions">
	<?php echo $this->Html->link(__('View Sessions'), array('controller' => 'programSessions', 'action' => 'index')); ?>
</div>
