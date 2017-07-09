# 数组定义多个单元使用同一个键名,只使用最后一个 #
<?php
	$array = array( 
		1 =>"a",
		"1"=>"b",
		1.5=>"c",
	 );
var_dump($array);//输出:array(1){[1]=>string(1)"c"}
?>

