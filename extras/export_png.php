<?php 

$data = $_POST['base64data'];

$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));//
//echo $data;

file_put_contents('image.png', $data);