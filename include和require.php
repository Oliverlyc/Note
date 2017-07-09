<?php include "***.html"; ?>
<?php require "***.html"; ?>
<?php 
	require//出现致命错误，停止运行脚本
	
	include//只会产生警告，不会终止脚本运行
?>

可以"http://"和"ftp://"开头

"require_once"和"include_once"只会加载一次

在条件|循环语句中，{require},{include}