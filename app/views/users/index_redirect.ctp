<div class="users index">
	
	Auto Complete Redirect Demo
	<?php
	    echo $this->Form->create('autoComplete',array('url' => array('controller' => 'users', 'action' => 'autoComplete_redirect'),'id' => 'UserForm'));
	    echo $this->Form->hidden('User.id');
	    echo $this->Ajax->autoComplete('User.search', array(
		'source' => array(
		    'controller' => 'users',
		    'action' => 'autoComplete_redirect',
		),
		'select' => 'function(event, ui){
		    $("#UserId").val(ui.item.id);
		    $("#UserForm").submit()}'
	    ));
	?>
	<p>
		jQuery UI Auto Complete will redirect user when they click the search result. Click <a href="http://blog.rudylee.com/2011/12/12/auto-redirect-in-cakephp-jquery-autocomplete/" target="_blank">here</a> for complete tutorial.
	</p>
	</form>
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
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
<div class="actions">

</div>