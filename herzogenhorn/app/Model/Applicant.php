<?php
//App::uses('AuthComponent', 'Controller/Component');
class Applicant extends AppModel {
    public $name = 'Applicant';

 public $validate = array(
        'vorname' => array(
            'rule' => 'notEmpty'
        ),
        'nachname' => array(
            'rule' => 'notEmpty'
        ),
/*
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
            'That username is already taken' => array(
                'rule' => 'isUnique',
                'message' => 'That username is already taken'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'Passwords do not match' => array(
                'rule' => 'matchPasswords',
                'message' => 'The passwords do not match.'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
*/
    );

}
