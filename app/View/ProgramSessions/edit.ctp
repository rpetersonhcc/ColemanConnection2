<h1>Edit Program Session</h1>
<div>
	<?php
		echo $this->Form->create('ProgramSession');
		echo $this->Form->input('start_date');
		echo $this->Form->input('programID');
		echo $this->Form->input('programName');
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->end('Update');
	?>
</div>
<div class="actions">
	<?php echo $this->Html->link('Cancel', array('action'=>'index')); ?>
</div>