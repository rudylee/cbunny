<div class="row">
    <div class="span12">
    
    <!-- Select2 Auto Complete -->
    <div class="pull-right">
        <input type="text" id="user-select2">
    </div>

    <h2><?php echo __('Users');?></h2>
    <table class="table"cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id');?></th>
                <th><?php echo $this->Paginator->sort('username');?></th>
                <th><?php echo $this->Paginator->sort('password');?></th>
                <th><?php echo $this->Paginator->sort('created');?></th>
                <th><?php echo $this->Paginator->sort('modified');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>