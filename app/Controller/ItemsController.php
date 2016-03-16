<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
require('/pdfengine.php');
//require('/pdfeng.php');




class ItemsController extends AppController
{
  
public $components  = array('RequestHandler');    
public $helpers = array('js' => array('jquery'));

public function beforeFilter()
{
parent::beforeFilter();
//$this->Security->blackHoleCallback = 'blackhole';
$this->Auth->allow(array('send_email' , 'reset_password'));
}

 function upload()
 {

if($this->request->isPost()) 
  {
$this->autoRender = false;
$data = array('user_id' => $this->Auth->user('id') , 'source' => "/Test/img/shop/".$_FILES['input1']['name']);
$this->Item->save($data);
$tmp_name = $_FILES['input1']['tmp_name']; 
$filename = WWW_ROOT.'img\shop'.DS.$_FILES['input1']['name']; 
move_uploaded_file($tmp_name,$filename);
   
return  "ok";
  
  }

/*
$this->request->onlyAllow('ajax');

if($this->request->is('ajax'))
  {

if(!empty ($this->request->data['Item']['file']))
  {

$filename = WWW_ROOT.'img\shop'.DS.$this->request->data['Item']['file']['name']; 
move_uploaded_file($this->data['Item']['file']['tmp_name'],$filename);
$data = array('user_id' => $this->Auth->user('id') , 'source' => $filename);
$this->Item->save($data);
 }
 }
 */

 }


 function pdf($code = null)
 {

$bill_amount = 0;
$this->autoRender = false;
$this->loadModel('Cart');

$details     = $this->Cart->find('all', array(
'conditions' => array('Cart.user_id' => $this->Auth->user('id')),
'recursive'  => -1,
'fields' => array('Cart.price')
 )); 

foreach ($details as $key) 
{
  $bill_amount = intval($bill_amount) + intval($key['Cart']['price']);
}

$message = "Hey vansh! your bill id is " . $this->Auth->user('id') . "and your bill amount is Rs. " . $bill_amount; 
$pdf = new pdfengine($message , $code);
$Email = new CakeEmail('default');
$Email->from(array('vanshkhanna27@gmail.com' => 'Vansh Khanna'));
$Email->to('vanshkhanna27@gmail.com');
$Email->subject('MyWishList');
$Email->attachments(array(
    'bill.pdf' => array(
        'file' => 'D:\xampp\htdocs\Test\app\webroot\files\bill.pdf',
        'mimetype' => 'application/pdf',
        'contentId' => 'my-unique-id'
    ) 
));
$message = "Hey vansh! your bill id is " . $this->Auth->user('id') . " and your bill amount is attached to this mail. Have a nice day"; 
$Email->send($message);


/*
   // header('Content-Disposition: attachment;');
   // $this->response->file(WWW_ROOT.files.DS."doc.pdf",array('download' => true, 'name' => 'doc.pdf'));
   // return $this->response;
*/
}

function pdf_d($code = null)
 {

$bill_amount = 0;
$this->autoRender = false;
$this->loadModel('Cart');

$details     = $this->Cart->find('all', array(
'conditions' => array('Cart.user_id' => $this->Auth->user('id')),
'recursive'  => -1,
'fields' => array('Cart.price')
 )); 

foreach ($details as $key) 
{
  $bill_amount = intval($bill_amount) + intval($key['Cart']['price']);
}

$message = "Hey vansh! your bill id is " . $this->Auth->user('id') . " and your bill amount is Rs. " . $bill_amount; 
$pdf = new pdfengine($message , $code);




/*
   // header('Content-Disposition: attachment;');
   // $this->response->file(WWW_ROOT.files.DS."doc.pdf",array('download' => true, 'name' => 'doc.pdf'));
   // return $this->response;
*/
}



 

function send_email($content)
{   


if($this->request->is('post'))
{
$this->autoRender = false;
$Email = new CakeEmail('default');

$Email->from(array('vanshkhanna27@gmail.com' => 'Vansh Khanna'));
$Email->to('vanshkhanna27@gmail.com');
$Email->attachments(array(
    'bill.pdf' => array(
        'file' => 'D:\xampp\htdocs\Test\app\webroot\files\bill.pdf',
        'mimetype' => 'application/pdf',
        'contentId' => 'my-unique-id'
    ) 
));
$Email->subject('Cake Email');
$Email->send($content);
}
//For mailing the password 
}


function reset_password()
{

$this->loadModel('User');
$this->autoRender=false;
//$details = explode(' ' , $this->request->data['details']);
$userid     = $this->User->find('all', array(
'conditions' => array('User.username' => $this->request->data['name']),
'recursive'  => -1,
'fields' => array('User.id')
 )); 


//$this->User->id = intval($userid[0]['User']['id']);
//$this->User->save(array('password' => 'ha73jnx'));


$Email = new CakeEmail('default');
$Email->from(array('vanshkhanna27@gmail.com' => 'Vansh Khanna'));
$Email->to('vanshkhanna27@gmail.com');
$Email->subject('MyWishList');
$content ='Your new password is ha73jnx. We suggest you to change it asap.Thanks!';
$Email->send($content);

return intval($userid[0]['User']['id']);

}

function change_password()
{

$this->autoRender=false;
$this->loadModel('User');
/*
$this->User->id = $this->Auth->user('id');
$this->User->save(array('password' => 'happy'));
*/

$content="Your new password is ".$this->request->data['password']." Thanks for using MyWishList.";
$Email = new CakeEmail('default');
$Email->from(array('vanshkhanna27@gmail.com' => 'Vansh Khanna'));
$Email->to('vanshkhanna27@gmail.com');
$Email->subject('MyWishList');
$Email->send($content);

return "success";
}




}











