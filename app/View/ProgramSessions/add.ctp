<h1>Add New Program Session</h1>
<div>
	<?php
		echo $this->Form->create('ProgramSession');
		echo $this->Form->inputs();
		echo $this->Form->end('Create Session');
	?>
</div>
<div class="actions">
	<?php echo $this->Html->link('Cancel', array('action'=>'index')); ?>
</div>