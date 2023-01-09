<?php
/* 
AUTOMATIC XSS BYE BYE
DEVELOPED BY: ALLAN10K and PH.MIKEY
*/
foreach(array_keys($_GET) as $get_value){
	$_GET[$get_value] = htmlspecialchars($_GET[$get_value], ENT_QUOTES);
}
foreach(array_keys($_POST) as $post_value){
	$_POST[$post_value] = htmlspecialchars($_POST[$post_value], ENT_QUOTES);
}
foreach(array_keys($_REQUEST) as $request_value){
	$_REQUEST[$request_value] = htmlspecialchars($_REQUEST[$request_value], ENT_QUOTES);
}
?>
