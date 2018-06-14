<?php 

function String_length($text){
	if(strlen($text)>170){
		$text = substr($text, 0, 170);
	} 
	return $text;
}