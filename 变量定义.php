<?php
	.=//连续定义变量
	//局部作用域，全局作用域，静态作用域，函数参数
	function updateCounter(){
		$counter++;
	}
	$counter = 10;
	updateCounter();
	echo $counter;
	//函数里的$counter只是局部变量 全局变量$counter还是10
    global $counter
    //全局变量$counter

    $a = 0b110001010 //0b开头作为二进制

    is_/*Type*/($var)//判断变量是否为空类型类型

    empty($var)//判断变量是否为空
    
?>