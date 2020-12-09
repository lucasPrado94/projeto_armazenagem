<?php 
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('pessoa',array('idPessoa'=>$_REQUEST['delId']));
	header('location: pessoaVisualizar.php?msg=rds');
	exit;
}
?>