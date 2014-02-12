<div class="um-panel">
	<div class="um-panel-header">
		<span class="um-panel-title">
			<?php echo __('Cake Logs') ?>
		</span>
	</div>
	<div class="um-panel-content">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th><?php echo __('SL');?></th>
					<th><?php echo __('Log File');?></th>
					<th><?php echo __('Size');?></th>
					<th><?php echo __('Last Modified');?></th>
					<th style="width:150px;"><?php echo __('Action');?></th>
				</tr>
			</thead>
			<tbody>
		<?php   $i=0;
				foreach($logFiles as $logFile) {
					$i++;
					$pathinfo = pathinfo($logFile);
					$filesize =round((filesize($logFile) / 1024), 2);
					$filesizeText = $filesize.' KB';
					if($filesize > 1024) {
						$filesize =round(($filesize / 1024), 2);
						$filesizeText = $filesize.' MB';
					}
					$filemtime = filemtime($logFile);
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$pathinfo['basename']."</td>";
					echo "<td>".$filesizeText."</td>";
					echo "<td>".date('d-M-Y h:i:s A',$filemtime)."</td>";
					echo "<td class='action'>";
						echo $this->Html->link(__('View/Edit', true), array('action'=>'cakelog', $pathinfo['basename']));
						echo "<br/>";
						echo $this->Html->link(__('Create Backup Copy', true), array('action'=>'cakelogbackup', $pathinfo['basename']), array('confirm'=>__('Are you sure, you want to create a copy of ').$pathinfo['basename'].'?'));
						echo "<br/>";
						echo $this->Html->link(__('Delete', true), array('action'=>'cakelogdelete', $pathinfo['basename']), array('confirm'=>__('Are you sure, you want to delete log file ').$pathinfo['basename'].'?'));
						echo "<br/>";
						echo $this->Html->link(__('Empty File', true), array('action'=>'cakelogempty', $pathinfo['basename']), array('confirm'=>__('Are you sure, you want to empty log file ').$pathinfo['basename'].'? '.__('You should create a backup before doing empty this file.')));
					echo "</td>";
					echo "</tr>";
				} ?>
			</tbody>
		</table>
		<div style='padding:15px'>
			<?php echo __('I recommend to take a backup log files then make empty them weekly or monthly. It can improve site performance.');?>
			<br/><br/>

	<?php   if(!empty($filename)) { ?>
				<div style='float:right;'><?php echo $this->Html->link(__('Close', true), array('action'=>'cakelog'), array('class'=>'btn btn-primary'));?></div>
				<h4><?php echo $filename.__(' details');?></h4>
				<div class='clearfix'></div>
	<?php       $filepath= LOGS.$filename;
				$filesize =round((filesize($filepath) / 1024), 1);
				$pathinfo = pathinfo($filepath);
				echo $this->Form->create('UserSetting', array('onsubmit'=>'return confirm("Are you sure, Saving this file will overwrite existing file")')); ?>
				<textarea id="UserSettingLogfile" style="width:99%;height:800px" name="data[UserSetting][logfile]"><?php echo file_get_contents($filepath);?></textarea>
				<div class="um-button-row">
					<?php echo $this->Form->Submit('Save', array('class'=>'btn btn-primary')); ?>
				</div>
				<?php echo $this->Form->end(); ?>
	<?php   } ?>
		</div>
	</div>
</div>