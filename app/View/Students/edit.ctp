<!-- File: /app/View/Students/edit.ctp -->


<h1>Edit Student</h1>
<?php
echo $this->Form->create('Student');
echo $this->Form->input('firstname');
echo $this->Form->input('firstname');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Save Student');
?>
