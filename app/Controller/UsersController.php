<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{

//public $components = array('Acl');
    
//public $helpers = array('js' => array('jquery'));



function blackhole($type)
{
    debug($type);
    throw new BadRequestException(__d('cake_dev','The request has been blackholed!'));
}




  public function index()
  {
   $this->redirect(array( 'controller' => 'users' , 'action' => 'login'));
  } 
  
 
  
  public function shop($val = 1 , $item_new_added = 0)
  {
$this->layout='shop';
global $sort_order;
$this->loadModel('Item');




if($val == 3 )
{
$this->render('/users/shop_delete');

$itemlist = $this->Item->find('all', array(
'conditions' => array('Item.user_id' => $this->Auth->user('id')),
'recursive'  => -1,
'fields' => array('Item.source' , 'Item.type'  , 'Item.id' )
 ));


$this->set(compact('itemlist'));
$this->set('id',$this->Auth->user('id'));
$this->set('n' , $this->Item->find('count',array('conditions' => array('Item.user_id' => $this->Auth->user('id')))));
$this->render('/users/shop_delete');


}

 $itemlist = $this->Item->find('all', array(
'conditions' => array('Item.type' => $val),
'recursive'  => -1,
'fields' => array('Item.source' , 'Item.price', 'Item.type' , 'item.id' ),
'order' => array('Item.price ASC')
 ));



$this->set(compact('itemlist'));
$this->set('id',$this->Auth->user('id'));
$this->set('n' , $this->Item->find('count'));
$this->set('item_tray',$item_new_added );



}
  
  public function contactus()
  {
$this->layout = 'shop';
$this->loadModel('Contact');

$this->Contact->save($this->request->data);
//$this->redirect(array('controller' => 'users' , 'action' => 'contactus'));
  }

 
  public function login()
  {
    $this->loadModel('Group');
    
    $this->layout = 'login';  

    if ($this->request->is('post')) {
        // Important: Use login() without arguments! See warning below.
        if ($this->Auth->login()) {
            return $this->redirect(array('controller' => 'users', 'action' => 'shop'));
            // Prior to 2.3 use
            // `return $this->redirect($this->Auth->redirect());`
        }
      else
      {
      return $this->redirect(array('controller' => 'users', 'action' => 'login'));
      }
      
    }

                 }
                
    


  public function logout()
  {

  $this->Auth->logout();
  $this->redirect(array('controller' => 'users' , 'action' => 'login'));
 
  }


  public function cart_add()
  {

$this->autoRender=false;    
$this->loadModel('Cart');
$this->loadModel('Item');

//getting details from the item table 
$details     = $this->Item->find('all', array(
'conditions' => array('Item.id' => $this->request->data['item']),
'recursive'  => -1,
'fields' => array('Item.type' , 'Item.price', 'Item.source')
 )); 

$item_to_add = array('item_id' => $this->request->data['item'],
    'type' => $details[0]['Item']['type'],
    'price' => $details[0]['Item']['price'],
    'user_id' => $this->Auth->user('id'),
    'source' => $details[0]['Item']['source']
     );

$check  = $this->Cart->find('first', array(
'conditions' => array('Cart.item_id' => $this->request->data['item'] , 'Cart.user_id' => $this->Auth->user('id')),
'recursive'  => -1,
'fields' => array('Cart.id')
 )); 

if(empty($check))
{
    $this->Cart->Save($item_to_add);
}
  
}


function cart($id = null)
{

$this->layout= 'shop';
$this->loadModel('Cart');

//debug($itemlist[0]['Cart']['price']);
if($id != null)
{
$this->Cart->deleteAll(array('Cart.item_id' => $id), false);
}

$itemlist = $this->Cart->find('all', array(
'conditions' => array('Cart.user_id' => $this->Auth->user('id')),
'recursive'  => -1,
'fields' => array('Cart.price', 'Cart.type' , 'Cart.item_id' , 'Cart.source' ),
 ));

$this->set('itemlist' , $itemlist);

  
}


 

  public function delete($passed_id = NULL)
  {
    $this->loadModel('Item');
    $this->Item->deleteAll(array('Item.id' => $passed_id), false);
    $this->redirect(array('controller' => 'users' , 'action' => 'shop' , 3));
  }


  public function aro_nodes()
  {
  $aro = $this->Acl->Aro;

$groups = array(
0 => array('alias' => 'Admin' , 'model' => 'Group' , 'foreign_key' => 1),
1 => array('alias' => 'Superuser' , 'model' => 'Group' , 'foreign_key' => 2),
2 => array('alias' => 'User' , 'model' => 'Group' , 'foreign_key' => 3));


foreach ($groups as $data) {
 // Remember to call create() when saving in loops... 
  $aro->create();
 //Save data
 $aro->save($data);
   }
   }

/*

public function aco_nodes()
{
$this->autoRender=false;

$aco_node = array('parent_id' => null , 
   'alias' => 'controllers');

$this->Acl->Aco->create($aco_node);
$this->Acl->Aco->save();
}

public function aco_permissions()
{
$this->loadModel('Group');

$group = $this->User->Group;

$group->id = 1; 
$this->Acl->allow($group, 'controllers' );

$group->id = 3; 
$this->Acl->deny($group, 'controllers'); 
$this->Acl->allow($group,'controllers/Users' , 'shop');

$group->id = 2;
$this->Acl->deny($group , 'controllers');

debug($group);
$this->autoRender= false;

}

*/

public function signup(){
 $this->layout = 'login';

if(!empty($this->request->data)){
  $this->User->save($this->request->data);

$this->redirect(array('controller' => 'users' , 'action' => 'login'));
}
}
}
