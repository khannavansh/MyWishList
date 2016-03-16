<?php

App::uses('AppModel' , 'Model');

class Cart extends AppModel{
	
public  $hasMany = array(
'Item' => array(
'className' => 'User' , 
'foreignKey' => 'item_id'
	),
'User' => array(
'className' => 'User' , 
'foreignKey' => 'user_id'
	)
  	);

}