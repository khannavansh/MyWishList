<?php

App::uses('AppModel', 'Model');

class User extends AppModel {



//public $actsAs = array('Acl' => array('type' => 'requester'));


public $belongsTo = array(
'Group' => array(
      'className'  => 'Group',
      'foreignKey' => 'group_id'
	)
    );


public $hasMany = array(
'Item' => array(
	 'className' => 'Item',
	 'foreignKey' => 'user_id'
    )
	);

	public function beforeSave($options = array())
	{

		if(isset($this->data['User']['password']))
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);

		return true;
	}


    

 function parentNode() {
    if (!$this->id && empty($this->data)) {
        return null;
    }
    $data = $this->data;
    if (empty($this->data)) {
        $data = $this->read();
    }
    if (!$data['User']['group_id']) {
        return null;
    } else {
      return array('Group' => array('id' => $data['User']['group_id']));
    }
}



	}