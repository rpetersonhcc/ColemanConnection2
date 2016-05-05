
<!-- File: /app/View/program_sessoions/index.ctp -->
<div>
	<h1>Total # of Program Sessions: <?php echo $count ?></h1>
</div>
<div class="actions">
<?php echo $this->Html->link(__('Add New Program Session'), array('action' => 'add')); ?>
<?php echo $this->Html->link(__('Back to Students'), array('controller' => 'students', 'action' => 'index')); ?>
</div>
<table>
	<head>
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Program ID</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</head>
	<tbody>
		<?php foreach($programSessions as $programSession): ?>
		<tr>
			<td><?php echo $programSession['ProgramSession']['id']; ?></td>
			<td><?php echo date('F j Y, g:i a', strtotime($programSession['ProgramSession']['start_date'])); ?></td>
			<td><?php echo $programSession['ProgramSession']['programID']; ?></td>
			<td><?php echo $programSession['ProgramSession']['programName']; ?></td>
			<td class="actions">
			<?php echo $this->Html->link('Edit', array('action'=>'edit',$programSession['ProgramSession']['id'])); ?>
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $programSession['ProgramSession']['id']), array('confirm' => 'Are you sure you want to delete the session ocurring on '. date('F j Y, g:i a', strtotime($programSession['ProgramSession']['start_date'])). '?')); ?>		
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
