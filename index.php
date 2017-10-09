<?php
require_once('header.php');

$smarty->assign('myname','Jack');
$smarty->display('index.tpl');


if(isset($_POST['submit']))
{
 $smarty->assign('name',$_POST[('name1')]);
 $smarty->display('index.tpl');
}


?>