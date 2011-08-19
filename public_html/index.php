<?php
$url="http://www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
header( 'Location: '.$url ) ;
?>