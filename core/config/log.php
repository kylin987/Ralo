<?php
//日志分两种，file和mysql
return array(
	'DRIVE' => 'mysql',
	'OPTION'=>array(
		'PATH'=>IMOOC.'/log/',
		'TABLE'=>'aalog'
	)
);