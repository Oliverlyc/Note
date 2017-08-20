1.函数内部变量以及参数都是局部变量
2.调用局部变量必须使用renturn返回
3.静态变量不随着函数结束而释放,在所有对该函数之间共享
<?php
	.=//连续定义变量
	//局部作用域，全局作用域，静态作用域，函数参数
	function updateCounter(){
		$counter++;
	}
	$counter = 10;
	updateCounter();
	echo $counter;//函数里的$counter只是局部变量 全局变量$counter还是10
    
    global $counter//全局变量$counter,在函数中使用全局变量必须要用global

    $a = 0b110001010 //0b开头作为二进制

    is_/*Type*/($var)//判断变量是否为空类型类型

    empty($var)//判断变量是否为空
    
?>