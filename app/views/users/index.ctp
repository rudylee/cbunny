<div class="row">
	<div class="span12">
		Auto Complete Demo 
		<?php
		    echo $this->Ajax->autoComplete('User.search', array(
			'source' => array(
			    'controller' => 'users',
			    'action' => 'autoComplete',
			),
		    ));
		?>
		<p>
			Simple demo to show integration between CakePHP and jQuery UI AutoComplete. Click <a href="http://blog.rudylee.com/2011/07/25/jquery-ui-autocomplete-in-cakephp/" target="_blank">here</a> for complete tutorial.
		</p>
		<h2><?php __('Users');?></h2>
		<table class="table">
		<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('username');?></th>
				<th><?php echo $this->Paginator->sort('password');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th><?php echo $this->Paginator->sort('modified');?></th>
				<th class="actions"><?php __('Actions');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['User']['id']; ?>&nbsp;</td>
			<td><?php echo $user['User']['username']; ?>&nbsp;</td>
			<td><?php echo $user['User']['password']; ?>&nbsp;</td>
			<td><?php echo $user['User']['created']; ?>&nbsp;</td>
			<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $user['User']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table>
	</div>
</div>