<div class="row">
    <div class="span12">
    <h1><?php echo h($user['User']['username']);?></h1>
    <dl class="dl-horizontal">
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Password'); ?></dt>
        <dd>
            <?php echo h($user['User']['password']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($user['User']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
    <?php 
        echo $this->Html->link(__('Back'), array(
            'action' => 'index'
        ),array(
            'class' => 'btn btn-primary'
        )); 
    ?>
</div>
