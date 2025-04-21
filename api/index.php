<?php

$page = $_GET['p'];
if($page!='') {
  echo 'Page : ' . $page;
}else{
  phpinfo();
}
