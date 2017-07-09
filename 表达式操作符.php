<?php
	//===与==优先级高于位操作符
	//===类型和数值都相等
	//字符串包括'.''e''E',字符串求值生成浮点数
	
	//强制类型转换
	$a = "5";
	$b = (int) $a;
	(bool) (float) (string) (array) (object)/*对象*/ (unset)//NULL

	//对象转换成数组
	class Person
	{
		var $name = "Oliver";
		var $age  = 20;
	}
	$o = new Person ;
	$a = (array) $o;//对象转换为数组
	print_r($a);//print_r 会将数组以特定样式显示

	
	

?>