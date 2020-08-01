<?php
	// php中的四种不同变量作用域
	// local
	// global
	// static
	// parameter
	1.global
	在函数内调用函数外定义的全局变量时,需要在变量前面加上global关键字
	例如:
	$x=5;
	$y=10;
	 
	function myTest()
	{
	    global $x,$y;
	    $y=$x+$y;
	}
	php将所有全局变量存储在一个名$GLOBAL[index]的数组中,index保存变量的名称,这个数组可以在函数内部访问,也可以直接更新全局变量
	例如:
	$x=5;
	$y=10;
	 
	function myTest()
	{
	    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
	}
	2.static
?>


