1.伪类型mixed,number,callback
2.函数形参中如果带有"&",在函数调用时必须传入一个变量
3.默认参数'[]'必须在没有默认参数的后面
<?php 
	func_get_args(oid)//返回一个数组，包含所有参数
	func_num_args(oid)//返回参数总数
	func_get_arg(arg_num)//接收一个数字参数,返回指定参数
 ?>
<?php 
 
	var_dump($expression)//显示结构信息，包括类型和值，数组会递归展开式输出
	?>
# 定义函数 #

# Math函数 #
<?php
	echo round(8.5,0,PHP_ROUND_HALF_EVEN)// 8 “.5取偶数舍入”
	echo round(8.5,0,PHP_ROUND_HALF_ODD)// 9 “.5取奇数舍入”
?>
	