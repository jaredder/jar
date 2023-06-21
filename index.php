<?php


$GLOBALS['C']['UrlRewrite']=1;
$GLOBALS['C']['Debug']=1;
$GLOBALS['C']['AdminDir']='power';
$GLOBALS['C']['SiteHash']='af375b9a7c940372';
$GLOBALS['C']['DbInfo']=array('host'=>'127.0.0.1','dbname'=>'coolman1','user'=>'root','password'=>'root','prefix'=>'jw1','engine'=>'InnoDB','charset'=>'utf8mb4','kind'=>'mysqlpdo',);


require('class/cms/cms.php');
ClassCMS_init();