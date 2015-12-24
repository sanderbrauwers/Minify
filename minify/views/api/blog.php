<?php

if(isset($this->blogList)){
	header('Content-type: application/json');
	echo json_encode($this->blogList);
}elseif(isset($this->singleBlog)){
	header('Content-type: application/json');
	echo json_encode($this->singleBlog);
}else echo 'Minify, API error';

?>