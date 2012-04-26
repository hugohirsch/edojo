<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
    public $name = 'User';

 public $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty'
        ),
        'lastname' => array(
            'rule' => 'notEmpty'
        ),
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
    );

    function matchPasswords($data) {
        if ($data['password'] == $this->data['User']['password_confirmation']) {
            return TRUE;
        } // end if
        $this->invalidate('password_confirmation', 'The passwords do not match');

    } // end of matchPasswords

public function beforeSave() {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
} // end beforeSave

}
