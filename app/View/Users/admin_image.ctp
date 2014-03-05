<?php echo $this->Form->create('User', array('type' => 'file')); ?>
    <?php echo $this->Form->input('User.username'); ?>
    <?php echo $this->Form->input('User.photo', array('type' => 'file')); ?>
    <?php echo $this->Form->input('User.photo_dir', array('type' => 'hidden')); ?>
<?php echo $this->Form->end(); ?>