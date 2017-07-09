<?php
	//单引号不解析,双引号解析
	//单引号通过\\,\'得到字面量
	if (is_string($x)){
		//判断字符串
	}
	?>
# Heredoc结构 # (相当于双引号)
<?php
    $str = <<<EOD 
Example
EOD; //第二个结束标识符一定在该行第一列
?>
#  Nowdoc # (相当于单引号)

