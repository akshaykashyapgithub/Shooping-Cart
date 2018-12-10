<?php

$name=$_POST['name'];
$Mo=$_POST['MO'];
$this->load->model('users');
$st=$this->users->register($name,$Mo);
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
