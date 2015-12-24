<?php

if(isset($this->pageList)){
	header('Content-type: application/json');
	echo json_encode($this->pageList);
}elseif(isset($this->singlePage)){
	header('Content-type: application/json');
	echo json_encode($this->singlePage);
}else echo 'Minify, API error';

?>