<?php

$uid=$_SESSION['UID'];
$pid=$_POST['Product_id'];

$this->load->model('cart');
$st=$this->cart->addtocart($uid,$pid);
if($st)
{
	$data=array('st'=>'Done');
}
else
{
	$data=array('st'=>'Not Done');
}

echo json_encode($data[0]);

?>
