<div class="row">
	<h1>
		Welcome, <?php echo $student[0]['Student']['firstname']; ?> <?php echo $student[0]['Student']['lastname']; ?>
	</h1>
</div>
<div class="row">
	<h1>Registered Programs</h1>
	<?php $i=0; foreach($student[0]['Session'] as $registeredSessions):  ?>
	<p>
		Start Date: <?php echo $registeredSessions['start_date']; ?>
		<br />
		Program Name: <?php echo $registeredSessions['programName']; ?>
		<br />
	</p>
	<?php $i++; endforeach;?>
</div>