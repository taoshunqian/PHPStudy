<?php
	// 数组的操作
	// 变量类型:数据类型
	// 1:整型 $a = 1
	// 2.字符串 $b = '1'
	// 3.布尔型 $c = true
	// 4.浮点型 $d = 60.5
	
	
	// 数组:复合式数据类型 
	// 有index
	
	
	// 1.创建数组
	// 不需要声明数组,数组可以储存任意类型的数据
	$student[0] = 10;
	$student[1] = 'hello';
	// 2)如果不写index,默认
	// $student[] = 10;
	// $student[] = 'hello';
	// 使用print_r() 输出内容 不能使用echo
	print_r($student);
	// 3)创建数组
	$arr = array(10,20,'0');
	print_r($arr);
	// 4)创建数组
	$arr2 = array(0=>10,1=>'tao',2=>true);
	var_dump($arr2)
	// 5)创建数组
	$arr3['num'] = 10;
	$arr3['age'] = 18;
	$arr3['sex'] = true;
	var_dump($arr3);
	// 输出数组单个
	// echo $arr['num']
	// 数组输出
	// var_dump();
	// 输出数组中的单个（不要加引号）
	// echo 
	
	
	// 2.数组遍历
	$arr = array(
	'1','a','c'
	);
	// count 可以输出数组的个数,也可以获取多维数组的个数
	$arr2 = array (
	0=>array(
	1,2,3
	),
	1=>array(
	1,2,3)
	)
	echo count($arr2,1) //输出结果是8个
	// 1)使用for
	for($i = 0;$i<$arr.length;$i++) {
		echo $arr[$i]
	}
	// 2)使用forEach
	// forEach在js中(item,value) php中($arr as $value)
	$arr = array(
	'1','a','c'
	);
	forEach($arr as $value) {
		echo $value //1,a,c
	}
	// 3)
	$arr = array(
	'name' => 'hell0',
	'age' => 18
	);
	forEach($arr as $key => $value) {
		echo $key '=>' $value //name=>hello,age=>18
	}
	// 4)
	$arr = array(
	array(1,2,3),
	array(1,2,3)
	);
	forEach($arr as $val) {
		forEach($val as $val2) {
			echo $val2 '<br />'
		}
	}
	5)
	$arr = array(
	array(1,2,3),
	array(1,2,3)
	);
	forEach($arr as $val) {
		echo '<tr>{$val}</tr>'
	}
?>


