<?php
    echo $this->Form->create('User', array('type' => 'file'));
echo $this->Form->input('id', array('value' => 1));
	
    echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'Image'));
    echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'User'));
    echo $this->Form->end(__('Add'));
?>