<!-- File: /app/View/Applicants/index.ctp -->
<?php echo $this->Html->link(__("applicants.add"), array('controller' => 'applicants', 'action' => 'add')); ?>
<h1><?php echo __("applicants.list"); ?></h1>
<table>
    <tr>
        <th><?php echo __("applicants.id"); ?></th>
        <th><?php echo __("applicants.week"); ?></th>
        <th><?php echo __("applicants.lastname"); ?></th>
        <th><?php echo __("applicants.firstname"); ?></th>
        <th><?php echo __("applicants.created"); ?></th>
        <th><?php echo __("common.actions"); ?></th>
    </tr>

    <?php foreach ($applicants as $applicant): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($applicant['Applicant']['id'],
array('controller' => 'applicants', 'action' => 'edit', $applicant['Applicant']['id'])); ?>
        </td>
        <td><?php echo $applicant['Applicant']['week']; ?></td>
        <td><?php echo $applicant['Applicant']['nachname']; ?></td>
        <td>
            <?php echo $this->Html->link($applicant['Applicant']['vorname'],
array('controller' => 'applicants', 'action' => 'view', $applicant['Applicant']['id'])); ?>
        </td>
        <td><?php echo $applicant['Applicant']['created']; ?></td>
        <td><?php echo $this->Form->postLink(__('applicants.delete'),
                array('action' => 'delete', $applicant['Applicant']['id']),
                array('confirm' => __('common.confirm.delete')." ".$applicant['Applicant']['id']));
            ?></td>
    </tr>
    <?php endforeach; ?>
</table>