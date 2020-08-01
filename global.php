<?php
	//超全局变量
	//发送数据的方式
	// 1.get;
	// 2.post;
	
	通过$_GET 可以直接获取当前页面？的内容
	// http://www.baidu.com?id=1&name=tao
	// 缺点:明文
	var_demp($_GET);//直接获取到 id,name
	// array(
	// 'id' => 1,
	// 'name' => 'tao'
	// );
	$_GET
	
	通过$_POST 可以直接获取from表单post请求的内容
	// 优点:安全
	$_POST获取到的也是一个数组,index是from表单中的name值
?>


