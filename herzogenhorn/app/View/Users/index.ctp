<!-- File: /app/View/Users/index.ctp -->
<?php echo $this->Html->link(__("user.add"), array('controller' => 'users', 'action' => 'add')); ?>
<h1>User list</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Created</th>
        <th>Further actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($user['User']['id'],
array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['lastname']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['firstname'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['created']; ?></td>
        <td>  <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>

</table>
