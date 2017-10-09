<?php

require_once ('smarty-3.1.30/libs/Smarty.class.php');
$smarty = new smarty();
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
$smarty->compile_dir='cache';
$smarty->compile_dir='configs';


?>