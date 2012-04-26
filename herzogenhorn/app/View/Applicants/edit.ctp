<!-- File: /app/View/Applicants/edit.ctp -->

<h1>Edit User</h1>
<?php
    echo $this->Form->create('Applicant', array('action' => 'edit'));
    echo $this->Form->input('firstname');
    echo $this->Form->input('lastname');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Applicant');
