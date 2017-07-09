# if #
<?php
	//if包括单个语句不需要{}，包含多个语句需要用{}
	$a = 1;
	if($a = 1)
		echo "Hello World!";
	else
		echo "balabala";
	
	//可以使用":"，作为if的结尾，并且以特定的关键字作为语句块的结尾
	if($validated):
		echo "hello world!";
	else:
		echo "Access";
	endif;

	//三元操作符
	if($value) {echo"yes";} else {echo"no";}
	echo $value ? "yes" : "no";
	?>

# switch #
<?php
	switch($name){
		case "name_1":
			break;
		case "name_2":
			break;
	}

	default;/*执行下面的语句直到遇到*/break;

	break number;//后面加数字表示跳出几层循环
	?>

# for #
<?php 
	//for循环替代语法
    $total = 0;
    for($i = 0;$i <= 10;$i++):
    	$total += $i;
    endfor   

?>

# foreach #
<?php
    foreach($array as $current){
    	//
    }

    foreach($array as $current):
    	//
    endforeach;

    foreach($array as $key => $value){

    }
    ?>

# try...catch #

# declare #
<?php
    //declare只认识‘ticks’和'encoding'指令
	declare(ticks = N);

	declare(encoding = "UTF-8");//指定输出脚本格式
?>

# exit goto: #
<?php 
	//停止执行脚本
	exit(/*要打印的字符串*/)
	die(/*字符串*/)

	goto cleanup;

	cleanup://冒号作为标识符，作为一个执行点
	//goto无法跳转进循环，或者switch语句
?>