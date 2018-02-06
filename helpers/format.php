<?php
 function formatDate($date){
	return date('F j,Y, g:j a',strtotime($date));
}

 function  short($text, $chars=350 ){
 	if(strlen($text) > 350){
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";
	return $text;}
	else
		return $text;
}