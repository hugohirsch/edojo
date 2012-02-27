<!-- File: /app/View/Users/index.ctp -->
<?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?>
<h1>User list</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Created</th>
        <th>Further actions</th>
    </tr>

    <?php foreach ($users as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['User']['id'],
array('controller' => 'users', 'action' => 'edit', $post['User']['id'])); ?>
        </td>
        <td><?php echo $post['User']['lastname']; ?></td>
        <td>
            <?php echo $this->Html->link($post['User']['firstname'],
array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
        </td>
        <td><?php echo $post['User']['created']; ?></td>
        <td>  <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>

</table>
