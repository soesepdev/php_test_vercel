<?php
error_reporting(0);
$page = $_GET['p'];
if($page!='') {
  echo 'Page : ' . $page;
}else{
  phpinfo();
}
