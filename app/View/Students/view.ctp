<div class="row">
	<h1>
		Welcome, <?php echo $student['Student']['firstname']; ?> <?php echo $student['Student']['firstname']; ?>
	</h1>
</div>
<div class="row">
	<h1>Student Information</h1>
	<table>
		<head>
			<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				
			</tr>
		</head>
		<tbody>			
			<tr>
				<td><?php echo $student['Student']['stuID']; ?></td>
				<td><?php echo $student['Student']['firstname']; ?></td>
				<td><?php echo $student['Student']['lastname']; ?></td>
				<td><?php echo $student['Student']['email']; ?></td>
				
			</tr>
		</tbody>
	</table>
	<div class="actions">
		<?php echo $this->Html->link(__('Back to Students'), array('action' => 'index')); ?>
	</div>
</div>


