<?php
class User extends AppModel {
    public $name = 'User';

    public $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty'
        ),
        'lastname' => array(
            'rule' => 'notEmpty'
        )
    );
}
